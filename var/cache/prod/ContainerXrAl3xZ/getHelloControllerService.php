<?php

namespace ContainerXrAl3xZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHelloControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\HelloController' shared autowired service.
     *
     * @return \App\Controller\HelloController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\HelloController'] = $instance = new \App\Controller\HelloController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\HelloController', $container));

        return $instance;
    }
}
