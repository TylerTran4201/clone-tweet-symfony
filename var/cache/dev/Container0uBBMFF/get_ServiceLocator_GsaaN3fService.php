<?php

namespace Container0uBBMFF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GsaaN3fService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gsaaN3f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gsaaN3f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'profiles' => ['privates', 'App\\Repository\\UserProfileRepository', 'getUserProfileRepositoryService', true],
        ], [
            'profiles' => 'App\\Repository\\UserProfileRepository',
        ]);
    }
}
