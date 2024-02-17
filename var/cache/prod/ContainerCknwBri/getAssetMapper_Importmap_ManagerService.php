<?php

namespace ContainerCknwBri;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_ManagerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'asset_mapper.importmap.manager' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\ImportMapManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['asset_mapper.importmap.manager'] = new \Symfony\Component\AssetMapper\ImportMap\ImportMapManager(($container->privates['asset_mapper'] ?? $container->load('getAssetMapperService')), ($container->privates['asset_mapper.importmap.config_reader'] ?? $container->load('getAssetMapper_Importmap_ConfigReaderService')), ($container->privates['asset_mapper.importmap.remote_package_downloader'] ?? $container->load('getAssetMapper_Importmap_RemotePackageDownloaderService')), ($container->privates['asset_mapper.importmap.resolver'] ?? $container->load('getAssetMapper_Importmap_ResolverService')));
    }
}
