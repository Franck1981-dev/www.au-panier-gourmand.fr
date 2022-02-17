<?php

namespace ContainerGk14kP0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PVeJZFwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PVeJZFw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PVeJZFw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'shipping' => ['privates', '.errored..service_locator.PVeJZFw.App\\Entity\\Shipping', NULL, 'Cannot autowire service ".service_locator.PVeJZFw": it references class "App\\Entity\\Shipping" but no such service exists.'],
        ], [
            'shipping' => 'App\\Entity\\Shipping',
        ]);
    }
}
