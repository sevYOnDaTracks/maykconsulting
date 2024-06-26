<?php

namespace ContainerQxetRmI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4tqk5QqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4tqk5Qq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4tqk5Qq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'user' => ['privates', '.errored..service_locator.4tqk5Qq.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.4tqk5Qq": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'user' => 'App\\Entity\\User',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
