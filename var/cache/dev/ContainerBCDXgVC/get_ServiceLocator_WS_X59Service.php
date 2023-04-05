<?php

namespace ContainerBCDXgVC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WS_X59Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WS.x59_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WS.x59_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'comments' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
            'posts' => ['privates', 'App\\Repository\\MicroPostRepository', 'getMicroPostRepositoryService', true],
            'users' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'comments' => 'App\\Repository\\CommentRepository',
            'posts' => 'App\\Repository\\MicroPostRepository',
            'users' => 'App\\Repository\\UserRepository',
        ]);
    }
}
