<?php

namespace ContainerJOMCPmX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Uz253YfService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Uz253Yf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Uz253Yf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'garantFinancier' => ['privates', '.errored..service_locator.Uz253Yf.App\\Entity\\GarantFinancier', NULL, 'Cannot autowire service ".service_locator.Uz253Yf": it needs an instance of "App\\Entity\\GarantFinancier" but this type has been excluded in "config/services.yaml".'],
            'garantFinancierRepository' => ['privates', 'App\\Repository\\GarantFinancierRepository', 'getGarantFinancierRepositoryService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'garantFinancier' => 'App\\Entity\\GarantFinancier',
            'garantFinancierRepository' => 'App\\Repository\\GarantFinancierRepository',
            'mailer' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
