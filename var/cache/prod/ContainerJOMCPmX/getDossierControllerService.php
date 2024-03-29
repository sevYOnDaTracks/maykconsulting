<?php

namespace ContainerJOMCPmX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDossierControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\DossierController' shared autowired service.
     *
     * @return \App\Controller\DossierController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\DossierController'] = $instance = new \App\Controller\DossierController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\DossierController', $container));

        return $instance;
    }
}
