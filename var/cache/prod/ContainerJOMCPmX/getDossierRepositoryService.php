<?php

namespace ContainerJOMCPmX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDossierRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\DossierRepository' shared autowired service.
     *
     * @return \App\Repository\DossierRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\DossierRepository'] = new \App\Repository\DossierRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
