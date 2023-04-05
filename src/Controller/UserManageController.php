<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Form\UserType;
use App\Entity\UserProfile;
use App\Form\AdminRoleType;
use Doctrine\ORM\Mapping\Id;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserManageController extends AbstractController
{
    #[Route('/admin/user_manage', name: 'app_user_manage')]
    public function userMange(UserRepository $users): Response
    {
        if (!$this->isGranted('ROLE_ADMIN_WATCH')){
            return $this->render('error/403_page.html.twig',[
                'title' => 'Cần phải có quyền xem thông tin'
            ]);
        }
        return $this->render('admin/user_manage.html.twig',[
            'users' => $users->findAllUser()
        ]);
    }

    //unlock account
    #[Route('/admin/user_unlock/{id}', name: 'app_user_unlock')]
    public function unlockAccount(User $user,UserRepository $users,Request $request): Response
    {
        if (!$this->isGranted('ROLE_ADMIN_LOCK')){
            return $this->render('error/403_page.html.twig',[
                'title' => 'Cần phải có quyền mở khóa người dùng (chỉ có admin).'
            ]);
        }
        $user = $user->setBannedUntil(null);
        $users->save($user,true);
        $this->addFlash(
            'success',
            'Đã gỡ khóa tài khoản '.$user->getEmail().'.'
        );
        return $this->redirect($request->headers->get('referer'));
    }
    //unlock account
    #[Route('/admin/user_lock/{id}', name: 'app_user_lock')]
    public function lockAccount(User $user,UserRepository $users,Request $request): Response
    {
        if (!$this->isGranted('ROLE_ADMIN_LOCK')){
            return $this->render('error/403_page.html.twig',[
                'title' => 'Cần phải có quyền khóa người dùng (chỉ có admin).'
            ]);
        }
        /** @var User $currentUser  */
        $currentUser = $this->getUser();
        if($currentUser->getId() != $user->getId()){
            $datetime = new DateTime();
            $newDate = $datetime->createFromFormat('d/m/Y', '30/12/2030');
            $user = $user->setBannedUntil($newDate);
            $users->save($user,true);
            $this->addFlash(
                'success',
                'Đã khóa tài khoản '.$user->getEmail().'.'
        );

        }
        return $this->redirect($request->headers->get('referer'));
    }

    #[Route('/admin/user_admin_manage', name: 'app_user_admin_manage')]
    public function userAdminManage(UserRepository $users,Request $request,UserPasswordHasherInterface $userPasswordHasher): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')){
            return $this->render('error/403_page.html.twig',[
                'title' => 'Cần phải có quyền xem quản trị viên (chỉ có admin).'
            ]);
        }
        $form = $this->createForm(
            UserType::class,
            new User()
        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $user->setIsAdmin(1);
            $user->setIsVerified(1);
            $user->setUserProfile(new UserProfile);
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $users->save($user,true);
            // Add a flash
            $this->addFlash(
                'success',
                'Thêm quản trị viên thành công'
            );
            return $this->redirectToRoute(
                'app_user_manage',
                [
                    'users' => $users->findAllUser(),
                ]
            );
        }
        return $this->render('admin/user_admin_manage.html.twig',[
            'users' => $users->findAllAdmin(),
            'form' => $form->createView()
        ]);
    }

    #[Route('/admin/user_admin_manage/set_role/{id}', name: 'app_set_role_admin')]
    public function setAdminRole(User $user,Request $request,UserRepository $users): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')){
            return $this->render('error/403_page.html.twig',[
                'title' => 'Cần phải có quyền xem quản trị viên (chỉ có admin).'
            ]);
        }
        $form = $this->createForm(
            AdminRoleType::class,
            $user
        );
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            if(in_array("ROLE_ADMIN",$user->getRoles()))
                $user->setRoles(['ROLE_ADMIN']);
            
            $users->save($user,true);
            $this->addFlash(
                'success',
                'Phân quyền thành công.'
            );
        }
        return $this->render('admin/set_admin_roles.html.twig',[
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    #[Route('/admin/user_profile_manage', name: 'app_user_profile_manage')]
    public function userProfileManage(UserRepository $users, Request $request): Response
    {
        if (!$this->isGranted('ROLE_ADMIN_WATCH')){
            return $this->render('error/403_page.html.twig',[
                'title' => 'Cần phải có quyền xem thông tin'
            ]);
        }

        return $this->render('admin/user_profile_manage.html.twig',[
            'users' => $users->findAll()
        ]);
        
    }

}