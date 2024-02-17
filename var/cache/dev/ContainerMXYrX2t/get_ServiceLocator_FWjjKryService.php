<?php

namespace ContainerMXYrX2t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FWjjKryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FWjjKry' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FWjjKry'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'dossier' => ['privates', '.errored..service_locator.FWjjKry.App\\Entity\\Dossier', NULL, 'Cannot autowire service ".service_locator.FWjjKry": it needs an instance of "App\\Entity\\Dossier" but this type has been excluded in "config/services.yaml".'],
        ], [
            'dossier' => 'App\\Entity\\Dossier',
        ]);
    }
}
