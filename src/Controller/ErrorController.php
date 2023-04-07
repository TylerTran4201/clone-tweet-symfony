<?php

// src/Controller/ErrorController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ErrorController extends AbstractController
{
    public function notFound(): Response
    {
        return $this->render('error/404_page.html.twig', [], null, Response::HTTP_NOT_FOUND);
    }
}
