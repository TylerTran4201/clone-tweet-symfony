<?php

namespace ContainerNYuJUVC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminRoleTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\AdminRoleType' shared autowired service.
     *
     * @return \App\Form\AdminRoleType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\AdminRoleType'] = new \App\Form\AdminRoleType();
    }
}
