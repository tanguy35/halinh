<?php

namespace ContainerXFQQX2m;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_FileManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.file_manager' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\FileManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['maker.file_manager'] = new \Symfony\Bundle\MakerBundle\FileManager(($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), new \Symfony\Bundle\MakerBundle\Util\AutoloaderUtil(new \Symfony\Bundle\MakerBundle\Util\ComposerAutoloaderFinder('App')), new \Symfony\Bundle\MakerBundle\Util\MakerFileLinkFormatter(($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService())), 'D:\\projet5', 'D:\\projet5/templates');
    }
}
