<?php

namespace ContainerXrAl3xZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactory_NullService extends App_KernelProdContainer
{
    /*
     * Gets the private 'mailer.transport_factory.null' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\NullTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return new \Symfony\Component\Mailer\Transport\NullTransportFactory(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), NULL, ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }
}
