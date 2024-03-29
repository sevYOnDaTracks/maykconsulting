<?php

namespace ContainerJOMCPmX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDompdfServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Services\DompdfService' shared autowired service.
     *
     * @return \App\Services\DompdfService
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Services\\DompdfService'] = new \App\Services\DompdfService(new \Dompdf\Dompdf(NULL));
    }
}
