<?php

namespace ContainerRCZrsfD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_SecretsEncryptFromLocalService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($container->privates['secrets.vault'] ?? $container->load('getSecrets_VaultService')), ($container->privates['secrets.local_vault'] ?? ($container->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault('E:\\clone-tweet/.env.dev.local'))));

        $instance->setName('secrets:encrypt-from-local');
        $instance->setDescription('Encrypt all local secrets to the vault');

        return $instance;
    }
}
