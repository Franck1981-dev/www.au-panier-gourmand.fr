<?php

namespace ContainerZF7Zigp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShippingControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ShippingController' shared autowired service.
     *
     * @return \App\Controller\ShippingController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ShippingController.php';

        $container->services['App\\Controller\\ShippingController'] = $instance = new \App\Controller\ShippingController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\ShippingController', $container));

        return $instance;
    }
}
