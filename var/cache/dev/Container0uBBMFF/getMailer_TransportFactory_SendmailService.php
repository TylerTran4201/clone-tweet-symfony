<?php

namespace Container0uBBMFF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactory_SendmailService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'mailer.transport_factory.sendmail' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\SendmailTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return new \Symfony\Component\Mailer\Transport\SendmailTransportFactory(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), NULL, ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }
}
