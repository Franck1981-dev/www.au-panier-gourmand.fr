<?php

namespace ContainerZF7Zigp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_96jqk9MService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.96jqk9M' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.96jqk9M'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'order' => ['privates', '.errored..service_locator.96jqk9M.App\\Entity\\Order', NULL, 'Cannot autowire service ".service_locator.96jqk9M": it references class "App\\Entity\\Order" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'order' => 'App\\Entity\\Order',
        ]);
    }
}
