<?php

namespace App\Controller;

use App\Entity\MicroPost;
use App\Repository\MicroPostRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostManageController extends AbstractController
{
    #[Route('/admin/post_manage', name: 'app_post_manage')]
    public function postManage(MicroPostRepository $posts): Response
    {
        if (!$this->isGranted('ROLE_ADMIN_WATCH')){
            return $this->render('error/403_page.html.twig',[
                'title' => 'Cần có quyền hạn để xem bài viết'
            ]);
        }
        return $this->render('admin/post_manage.html.twig',[
            'posts' => $posts->findAll()
        ]); 
    }
}
