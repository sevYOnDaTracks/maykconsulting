<?php

namespace ContainerXcEbhTU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UeARcDrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UeARcDr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UeARcDr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'publicMessageRepository' => ['privates', 'App\\Repository\\PublicMessageRepository', 'getPublicMessageRepositoryService', true],
        ], [
            'publicMessageRepository' => 'App\\Repository\\PublicMessageRepository',
        ]);
    }
}
