<?php

namespace Container1UUOcgr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GJZrdRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GJ_ZrdR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GJ_ZrdR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'garantFinancierRepository' => ['privates', 'App\\Repository\\GarantFinancierRepository', 'getGarantFinancierRepositoryService', true],
            'publicMessageRepository' => ['privates', 'App\\Repository\\PublicMessageRepository', 'getPublicMessageRepositoryService', true],
        ], [
            'garantFinancierRepository' => 'App\\Repository\\GarantFinancierRepository',
            'publicMessageRepository' => 'App\\Repository\\PublicMessageRepository',
        ]);
    }
}
