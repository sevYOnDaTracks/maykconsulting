<?php

namespace ContainerI5NmwMu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZzVjYJFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zzVjYJF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zzVjYJF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'garantRepository' => ['privates', 'App\\Repository\\GarantFinancierRepository', 'getGarantFinancierRepositoryService', true],
            'publicMessageRepository' => ['privates', 'App\\Repository\\PublicMessageRepository', 'getPublicMessageRepositoryService', true],
        ], [
            'garantRepository' => 'App\\Repository\\GarantFinancierRepository',
            'publicMessageRepository' => 'App\\Repository\\PublicMessageRepository',
        ]);
    }
}