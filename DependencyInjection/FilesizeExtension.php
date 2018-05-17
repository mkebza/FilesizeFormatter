<?php
/**
 * Created by PhpStorm.
 * User: mkebza
 * Date: 17/05/2018
 * Time: 20:46
 */

namespace MKebza\Filesize\DependencyInjection;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class FilesizeExtension extends \Symfony\Component\HttpKernel\DependencyInjection\Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('services.yaml');
    }
}