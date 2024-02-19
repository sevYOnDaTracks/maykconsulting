<?php

namespace ContainerJOMCPmX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExportControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ExportController' shared autowired service.
     *
     * @return \App\Controller\ExportController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ExportController'] = $instance = new \App\Controller\ExportController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\ExportController', $container));

        return $instance;
    }
}