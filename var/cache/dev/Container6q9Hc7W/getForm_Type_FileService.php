<?php

namespace Container6q9Hc7W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_Type_FileService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType(NULL);
    }
}
