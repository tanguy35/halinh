<?php

namespace ContainerRLb3mOO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_DefaultConnectionService extends App_KernelProdContainer
{
    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['url' => $container->getEnv('resolve:DATABASE_URL'), 'driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'defaultTableOptions' => []], new \Doctrine\DBAL\Configuration(), new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', true],
            'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber' => ['privates', 'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber', 'getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService', true],
            'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber' => ['privates', 'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber', 'getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService', true],
            'vich_uploader.listener.clean.article_image' => ['privates', 'vich_uploader.listener.clean.article_image', 'getVichUploader_Listener_Clean_ArticleImageService', true],
            'vich_uploader.listener.remove.article_image' => ['privates', 'vich_uploader.listener.remove.article_image', 'getVichUploader_Listener_Remove_ArticleImageService', true],
            'vich_uploader.listener.upload.article_image' => ['privates', 'vich_uploader.listener.upload.article_image', 'getVichUploader_Listener_Upload_ArticleImageService', true],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber' => '?',
            'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber' => '?',
            'vich_uploader.listener.clean.article_image' => '?',
            'vich_uploader.listener.remove.article_image' => '?',
            'vich_uploader.listener.upload.article_image' => '?',
        ]), [0 => 'vich_uploader.listener.clean.article_image', 1 => 'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber', 2 => 'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber', 3 => 'vich_uploader.listener.remove.article_image', 4 => 'vich_uploader.listener.upload.article_image', 5 => [0 => [0 => 'loadClassMetadata'], 1 => 'doctrine.orm.default_listeners.attach_entity_listeners']]), []);
    }
}
