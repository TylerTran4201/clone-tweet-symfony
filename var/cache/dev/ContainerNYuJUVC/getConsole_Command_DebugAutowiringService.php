<?php

namespace ContainerNYuJUVC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_DebugAutowiringService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:autowiring');
        $instance->setDescription('List classes/interfaces you can use for autowiring');

        return $instance;
    }
}
