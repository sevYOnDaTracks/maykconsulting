<?php

namespace ContainerQxetRmI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDompdfServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Services\DompdfService' shared autowired service.
     *
     * @return \App\Services\DompdfService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Services/DompdfService.php';
        include_once \dirname(__DIR__, 4).'/vendor/dompdf/dompdf/src/Dompdf.php';

        return $container->privates['App\\Services\\DompdfService'] = new \App\Services\DompdfService(new \Dompdf\Dompdf(NULL));
    }
}
