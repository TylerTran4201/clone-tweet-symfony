<?php

namespace Container6q9Hc7W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFollowerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FollowerController' shared autowired service.
     *
     * @return \App\Controller\FollowerController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\FollowerController'] = $instance = new \App\Controller\FollowerController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\FollowerController', $container));

        return $instance;
    }
}
