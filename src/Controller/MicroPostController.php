<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Comment;
use App\Entity\MicroPost;
use App\Form\CommentType;
use App\Form\MicroPostType;
use App\Form\TitleSearchType;
use App\Repository\CommentRepository;
use App\Repository\MicroPostRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MicroPostController extends AbstractController
{
    #[Route('/micro-post', name: 'app_micro_post')]
    public function index(MicroPostRepository $posts): Response
    {

        return $this->render(
            'micro_post/index.html.twig',
            [
                'posts' => $posts->findAllWithComments(),
            ]
        );
    }

    #[Route('/micro-post/top-liked', name: 'app_micro_post_topliked')]
    public function topLiked(MicroPostRepository $posts): Response
    {
        return $this->render(
            'micro_post/top_liked.html.twig',
            [
                'posts' => $posts->findAllWithMinLikes(2),
            ]
        );
    }

    #[Route('/micro-post/follows', name: 'app_micro_post_follows')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function follows(MicroPostRepository $posts): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();

        return $this->render(
            'micro_post/follows.html.twig',
            [
                'posts' => $posts->findAllByAuthors(
                    $currentUser->getFollows()
                ),
            ]
        );
    }

    #[Route('/micro-post/search', name: 'app_micro_post_search')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function search(Request $request, MicroPostRepository $posts): Response
    {
        $form = $this->createForm(
            TitleSearchType::class,
            new MicroPost()
        );
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $post = $form->getData();
            /** @var String  $txtSeach */

            $txtSeach = $post->getTitle();
            // Add a flash
            return $this->render(
                'micro_post/title_Search.html.twig',
                [
                    'posts' => $posts->findAllBySearch($txtSeach),
                    'form' => $form->createView()
                ]
            );
            // Redirect
        }
        return $this->render(
            'micro_post/title_Search.html.twig',
            [
                'posts' => $posts->findAllBySearch(""),
                'form' => $form->createView()
            ]
        );
    }

    #[Route('/micro-post/{post}', name: 'app_micro_post_show')]
    #[IsGranted(MicroPost::VIEW, 'post')]
    public function showOne(MicroPost $post): Response
    {
        return $this->render(
            'micro_post/show.html.twig',
            [
                'post' => $post,
            ]
        );
    }

    #[Route(
        '/micro-post/add',
        name: 'app_micro_post_add',
        priority: 2
    )]
    public function add(
        Request $request,
        MicroPostRepository $posts
    ): Response {
        if (!$this->isGranted('ROLE_COMMENTER')){
            return $this->render('error/403_page.html.twig',[
                'title' => 'Cần phải xác minh tài khoản để dùng tính năng này'
            ]);
        }

        $form = $this->createForm(
            MicroPostType::class,
            new MicroPost()
        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $post = $form->getData();
            $post->setAuthor($this->getUser());
            $posts->save($post, true);

            // Add a flash
            $this->addFlash(
                'success',
                'Your micro post have been addded.'
            );

            return $this->redirectToRoute('app_micro_post');
            // Redirect
        }

        return $this->renderForm(
            'micro_post/add.html.twig',
            [
                'form' => $form
            ]
        );
    }
    #[Route('/micro-post/{post}/delete', name: 'app_micro_post_delete')]
    public function delete(MicroPost $post, MicroPostRepository $posts,Request $request): Response
    {
        if (!$this->isGranted('ROLE_ADMIN_REMOVE') || !$this->isGranted('ROLE_EDIT')){ // for admin remove and edit users
            return $this->render('error/403_page.html.twig',[
                'title' => 'Cần có quyền hạn để xóa bài viết'
            ]);
        }

        $posts->remove($post,true);
        $this->addFlash(
            'success',
            'Đã xóa bài viết.'
        );
        return $this->redirect($request->headers->get('referer'));
    }

    #[Route('/micro-post/{post}/edit', name: 'app_micro_post_edit')]
    public function edit(
        MicroPost $post,
        Request $request,
        MicroPostRepository $posts
    ): Response {
        if (!$this->isGranted(MicroPost::EDIT, $post)){
            return $this->render('error/403_page.html.twig',[
                'title' => 'Cần có quyền hạn để chỉnh sửa bài viết'
            ]);
        }
        $form = $this->createForm(
            MicroPostType::class,
            $post
        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $post = $form->getData();
            $posts->save($post, true);

            // Add a flash
            $this->addFlash(
                'success',
                'Your micro post have been updated.'
            );

            return $this->redirectToRoute('app_micro_post');
            // Redirect
        }

        return $this->renderForm(
            'micro_post/edit.html.twig',
            [
                'form' => $form,
                'post' => $post
            ]
        );
    }

    #[Route('/micro-post/{post}/comment', name: 'app_micro_post_comment')]
    #[IsGranted('ROLE_USER')]
    public function addComment(
        MicroPost $post,
        Request $request,
        CommentRepository $comments
    ): Response {
        if (!$this->isGranted('ROLE_COMMENTER')){
            return $this->render('error/403_page.html.twig',[
                'title' => 'Cần phải xác minh tài khoản để thực hiện chức năng này'
            ]);
        }

        $form = $this->createForm(
            CommentType::class,
            new Comment()
        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment = $form->getData();
            $comment->setPost($post);
            $comment->setAuthor($this->getUser());
            $comments->save($comment, true);

            // Add a flash
            $this->addFlash(
                'success',
                'Your comment have been updated.'
            );

            return $this->redirectToRoute(
                'app_micro_post_show',
                ['post' => $post->getId()]
            );
            // Redirect
        }

        return $this->renderForm(
            'micro_post/comment.html.twig',
            [
                'form' => $form,
                'post' => $post
            ]
        );
    }
}