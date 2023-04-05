<?php

namespace Container6q9Hc7W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4T4EJFRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4T4EJFR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4T4EJFR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored..service_locator.4T4EJFR.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.4T4EJFR": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'user' => 'App\\Entity\\User',
        ]);
    }
}
