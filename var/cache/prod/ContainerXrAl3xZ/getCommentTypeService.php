<?php

namespace ContainerXrAl3xZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\CommentType' shared autowired service.
     *
     * @return \App\Form\CommentType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\CommentType'] = new \App\Form\CommentType();
    }
}
