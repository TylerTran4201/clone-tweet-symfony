<?php

namespace Container0uBBMFF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Security_Command_UserPasswordHash_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.security.command.user_password_hash.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.security.command.user_password_hash.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('security:hash-password', [], 'Hash a user password', false, #[\Closure(name: 'security.command.user_password_hash', class: 'Symfony\\Component\\PasswordHasher\\Command\\UserPasswordHashCommand')] function () use ($container): \Symfony\Component\PasswordHasher\Command\UserPasswordHashCommand {
            return ($container->privates['security.command.user_password_hash'] ?? $container->load('getSecurity_Command_UserPasswordHashService'));
        });
    }
}
