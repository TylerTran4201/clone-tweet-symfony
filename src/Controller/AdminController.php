<?php

namespace App\Controller;

use App\Entity\MicroPost;
use App\Repository\CommentRepository;
use App\Repository\MicroPostRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        if (!$this->isGranted('ROLE_ADMIN_WATCH')){
            return $this->render('error/403_page.html.twig',[
                'title' => 'Cần phải có quyền admin để truy cập'
            ]);
        }

        return $this->redirectToRoute('app_statistical_manage');
    }

    #[Route('/admin/statistical', name: 'app_statistical_manage')]
    public function statistical(UserRepository $users, MicroPostRepository $posts, CommentRepository $comments): Response
    {
        if (!$this->isGranted('ROLE_ADMIN_WATCH')){
            return $this->render('error/403_page.html.twig',[
                'title' => 'Cần phải có quyền admin để truy cập'
            ]);
        }
        return $this->render('admin/statistical.html.twig',[
            'users' => $users->findAllUser(),
            'posts'=> $posts->findAll(),
            'comments' => $comments->findAll()
        ]);
    }
}
