<?php

namespace ContainerI5NmwMu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AwqL4yCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.awqL4yC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.awqL4yC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'dossier' => ['privates', '.errored..service_locator.awqL4yC.App\\Entity\\Dossier', NULL, 'Cannot autowire service ".service_locator.awqL4yC": it needs an instance of "App\\Entity\\Dossier" but this type has been excluded in "config/services.yaml".'],
            'dossierRepository' => ['privates', 'App\\Repository\\DossierRepository', 'getDossierRepositoryService', true],
        ], [
            'dossier' => 'App\\Entity\\Dossier',
            'dossierRepository' => 'App\\Repository\\DossierRepository',
        ]);
    }
}
