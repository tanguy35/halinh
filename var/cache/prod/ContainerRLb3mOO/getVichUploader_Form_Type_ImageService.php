<?php

namespace ContainerRLb3mOO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Form_Type_ImageService extends App_KernelProdContainer
{
    /*
     * Gets the public 'vich_uploader.form.type.image' shared service.
     *
     * @return \Vich\UploaderBundle\Form\Type\VichImageType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['vich_uploader.form.type.image'] = new \Vich\UploaderBundle\Form\Type\VichImageType(($container->privates['vich_uploader.storage.file_system'] ?? $container->load('getVichUploader_Storage_FileSystemService')), ($container->services['vich_uploader.upload_handler'] ?? $container->load('getVichUploader_UploadHandlerService')), ($container->privates['vich_uploader.property_mapping_factory'] ?? $container->load('getVichUploader_PropertyMappingFactoryService')), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), NULL);
    }
}
