<?php

namespace Container0uBBMFF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfileControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProfileController' shared autowired service.
     *
     * @return \App\Controller\ProfileController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ProfileController'] = $instance = new \App\Controller\ProfileController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ProfileController', $container));

        return $instance;
    }
}
