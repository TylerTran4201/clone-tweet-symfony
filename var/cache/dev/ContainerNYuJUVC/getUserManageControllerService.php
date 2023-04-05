<?php

namespace ContainerNYuJUVC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserManageControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\UserManageController' shared autowired service.
     *
     * @return \App\Controller\UserManageController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\UserManageController'] = $instance = new \App\Controller\UserManageController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\UserManageController', $container));

        return $instance;
    }
}
