<?php

namespace Container0uBBMFF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Fh2tw1gService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fh2tw1g' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fh2tw1g'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'comments' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
            'post' => ['privates', '.errored..service_locator.fh2tw1g.App\\Entity\\MicroPost', NULL, 'Cannot autowire service ".service_locator.fh2tw1g": it references class "App\\Entity\\MicroPost" but no such service exists.'],
        ], [
            'comments' => 'App\\Repository\\CommentRepository',
            'post' => 'App\\Entity\\MicroPost',
        ]);
    }
}
