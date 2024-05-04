<?php

namespace ContainerI5NmwMu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFactureControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FactureController' shared autowired service.
     *
     * @return \App\Controller\FactureController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FactureController.php';

        $container->services['App\\Controller\\FactureController'] = $instance = new \App\Controller\FactureController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\FactureController', $container));

        return $instance;
    }
}
