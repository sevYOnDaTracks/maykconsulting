<?php

namespace ContainerGbsRWdb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Zaw4RSGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zaw4RSG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zaw4RSG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'message' => ['privates', '.errored..service_locator.zaw4RSG.App\\Entity\\PublicMessage', NULL, 'Cannot autowire service ".service_locator.zaw4RSG": it needs an instance of "App\\Entity\\PublicMessage" but this type has been excluded in "config/services.yaml".'],
            'publicMessageRepository' => ['privates', 'App\\Repository\\PublicMessageRepository', 'getPublicMessageRepositoryService', true],
        ], [
            'message' => 'App\\Entity\\PublicMessage',
            'publicMessageRepository' => 'App\\Repository\\PublicMessageRepository',
        ]);
    }
}
