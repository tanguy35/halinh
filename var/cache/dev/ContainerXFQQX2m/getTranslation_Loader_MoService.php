<?php

namespace ContainerXFQQX2m;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Loader_MoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }
}
