<?php

namespace Container0mou3nm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VB1BKOIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vB1BKOI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vB1BKOI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'user' => ['privates', '.errored..service_locator.vB1BKOI.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.vB1BKOI": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'security' => '?',
            'user' => 'App\\Entity\\User',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
