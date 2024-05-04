<?php

namespace ContainerI5NmwMu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDossierTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\DossierType' shared autowired service.
     *
     * @return \App\Form\DossierType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/DossierType.php';

        return $container->privates['App\\Form\\DossierType'] = new \App\Form\DossierType();
    }
}
