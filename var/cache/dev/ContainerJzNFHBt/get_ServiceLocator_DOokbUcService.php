<?php

namespace ContainerJzNFHBt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DOokbUcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dOokbUc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dOokbUc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored..service_locator.dOokbUc.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.dOokbUc": it references class "App\\Entity\\User" but no such service exists.'],
            'users' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'user' => 'App\\Entity\\User',
            'users' => 'App\\Repository\\UserRepository',
        ]);
    }
}
