<?php

namespace ContainerXrAl3xZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMicroPostVoterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\Voter\MicroPostVoter' shared autowired service.
     *
     * @return \App\Security\Voter\MicroPostVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Security\\Voter\\MicroPostVoter'] = new \App\Security\Voter\MicroPostVoter(new \Symfony\Component\Security\Core\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'security.authorization_checker' => ['privates', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.token_storage' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'security.authorization_checker' => '?',
            'security.token_storage' => '?',
        ])));
    }
}
