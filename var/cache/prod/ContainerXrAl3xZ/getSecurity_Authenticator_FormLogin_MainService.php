<?php

namespace ContainerXrAl3xZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_FormLogin_MainService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authenticator.form_login.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['http_kernel'] ?? $container->getHttpKernelService());

        if (isset($container->privates['security.authenticator.form_login.main'])) {
            return $container->privates['security.authenticator.form_login.main'];
        }
        $b = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));
        $c = ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()));

        $d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($b, [], $c);
        $d->setOptions(['login_path' => 'app_login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false]);
        $d->setFirewallName('main');
        $e = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($a, $b, [], $c);
        $e->setOptions(['login_path' => 'app_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $container->privates['security.authenticator.form_login.main'] = new \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator($b, ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), $d, $e, ['login_path' => 'app_login', 'check_path' => 'app_login', 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'enable_csrf' => false, 'post_only' => true, 'form_only' => false]);
    }
}
