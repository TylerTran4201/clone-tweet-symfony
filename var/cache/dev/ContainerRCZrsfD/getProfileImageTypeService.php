<?php

namespace ContainerRCZrsfD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfileImageTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ProfileImageType' shared autowired service.
     *
     * @return \App\Form\ProfileImageType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ProfileImageType'] = new \App\Form\ProfileImageType();
    }
}
