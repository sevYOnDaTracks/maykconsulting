<?php

namespace Container8AqpKy9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_DoctrineMigrations_RollupCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.doctrine_migrations.rollup_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.doctrine_migrations.rollup_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('doctrine:migrations:rollup', [], 'Rollup migrations by deleting all tracked versions and insert the one version that exists.', false, #[\Closure(name: 'doctrine_migrations.rollup_command', class: 'Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand')] fn (): \Doctrine\Migrations\Tools\Console\Command\RollupCommand => ($container->privates['doctrine_migrations.rollup_command'] ?? $container->load('getDoctrineMigrations_RollupCommandService')));
    }
}