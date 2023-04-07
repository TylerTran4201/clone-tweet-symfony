<?php

namespace ContainerJzNFHBt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMicroPostRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\MicroPostRepository' shared autowired service.
     *
     * @return \App\Repository\MicroPostRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\MicroPostRepository'] = new \App\Repository\MicroPostRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
