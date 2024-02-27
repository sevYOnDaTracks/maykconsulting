<?php

namespace ContainerQUxqjtU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TbB4ZCmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TbB4ZCm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TbB4ZCm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'dompdfService' => ['privates', 'App\\Services\\DompdfService', 'getDompdfServiceService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'garantFinancierRepository' => ['privates', 'App\\Repository\\GarantFinancierRepository', 'getGarantFinancierRepositoryService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'publicMessageRepository' => ['privates', 'App\\Repository\\PublicMessageRepository', 'getPublicMessageRepositoryService', true],
        ], [
            'dompdfService' => 'App\\Services\\DompdfService',
            'entityManager' => '?',
            'garantFinancierRepository' => 'App\\Repository\\GarantFinancierRepository',
            'mailer' => '?',
            'publicMessageRepository' => 'App\\Repository\\PublicMessageRepository',
        ]);
    }
}
