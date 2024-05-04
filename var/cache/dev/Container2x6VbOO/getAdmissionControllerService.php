<?php

namespace Container2x6VbOO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdmissionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AdmissionController' shared autowired service.
     *
     * @return \App\Controller\AdmissionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AdmissionController.php';

        $container->services['App\\Controller\\AdmissionController'] = $instance = new \App\Controller\AdmissionController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\AdmissionController', $container));

        return $instance;
    }
}
