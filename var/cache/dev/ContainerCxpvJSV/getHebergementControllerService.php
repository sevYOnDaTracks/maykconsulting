<?php

namespace ContainerCxpvJSV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHebergementControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\HebergementController' shared autowired service.
     *
     * @return \App\Controller\HebergementController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/HebergementController.php';

        $container->services['App\\Controller\\HebergementController'] = $instance = new \App\Controller\HebergementController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\HebergementController', $container));

        return $instance;
    }
}
