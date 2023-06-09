<?php

namespace ContainerXrAl3xZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AJrNPvKService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.aJrNPvK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aJrNPvK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'post' => ['privates', '.errored..service_locator.aJrNPvK.App\\Entity\\MicroPost', NULL, 'Cannot autowire service ".service_locator.aJrNPvK": it references class "App\\Entity\\MicroPost" but no such service exists.'],
            'posts' => ['privates', 'App\\Repository\\MicroPostRepository', 'getMicroPostRepositoryService', true],
        ], [
            'post' => 'App\\Entity\\MicroPost',
            'posts' => 'App\\Repository\\MicroPostRepository',
        ]);
    }
}
