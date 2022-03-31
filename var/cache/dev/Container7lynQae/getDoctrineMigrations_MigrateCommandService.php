<?php

namespace Container7lynQae;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMigrations_MigrateCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine_migrations.migrate_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\MigrateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine_migrations.migrate_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\MigrateCommand(($container->privates['doctrine.migrations.dependency_factory'] ?? $container->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:migrate');

        $instance->setName('doctrine:migrations:migrate');

        return $instance;
    }
}