<?php

namespace ContainerRCZrsfD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_Voter_Security_Access_ExpressionVoterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.security.voter.security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['security.authorization_checker'] ?? $container->getSecurity_AuthorizationCheckerService());

        if (isset($container->privates['debug.security.voter.security.access.expression_voter'])) {
            return $container->privates['debug.security.voter.security.access.expression_voter'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['debug.security.voter.security.access.expression_voter'])) {
            return $container->privates['debug.security.voter.security.access.expression_voter'];
        }

        return $container->privates['debug.security.voter.security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($container->privates['cache.security_expression_language'] ?? $container->getCache_SecurityExpressionLanguageService())), ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), $a, ($container->privates['security.role_hierarchy'] ?? $container->getSecurity_RoleHierarchyService())), $b);
    }
}
