<?php

namespace ContainerBCDXgVC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosCkEditor_Form_TypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_ck_editor.form.type' shared service.
     *
     * @return \FOS\CKEditorBundle\Form\Type\CKEditorType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['fos_ck_editor.form.type'] = new \FOS\CKEditorBundle\Form\Type\CKEditorType(new \FOS\CKEditorBundle\Config\CKEditorConfiguration(['enable' => true, 'async' => false, 'auto_inline' => true, 'inline' => false, 'autoload' => true, 'jquery' => false, 'require_js' => false, 'input_sync' => false, 'base_path' => 'bundles/fosckeditor/', 'js_path' => 'bundles/fosckeditor/ckeditor.js', 'jquery_path' => 'bundles/fosckeditor/adapters/jquery.js', 'default_config' => NULL, 'configs' => [], 'plugins' => [], 'styles' => [], 'templates' => [], 'filebrowsers' => [], 'toolbars' => ['configs' => [], 'items' => []]]));
    }
}
