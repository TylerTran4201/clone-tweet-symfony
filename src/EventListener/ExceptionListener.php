<?php
// src/EventListener/ExceptionListener.php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class ExceptionListener
{
    private $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    public function onKernelException(ExceptionEvent $event)
    {
        $exception = $event->getThrowable();

        if ($exception instanceof HttpException && $exception->getStatusCode() == 404) {
            $response = new RedirectResponse($this->urlGenerator->generate('error_404'));
            $event->setResponse($response);
        } elseif (!$event->getResponse() || $event->getResponse()->getStatusCode() == 500) {
            $response = new RedirectResponse($this->urlGenerator->generate('error_500'));
            $event->setResponse($response);
        }
    }
}
