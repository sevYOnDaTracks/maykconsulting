<?php

namespace ContainerJOMCPmX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFragment_Renderer_InlineService extends App_KernelProdContainer
{
    /*
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['http_kernel'] ?? self::getHttpKernelService($container));

        if (isset($container->privates['fragment.renderer.inline'])) {
            return $container->privates['fragment.renderer.inline'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['fragment.renderer.inline'])) {
            return $container->privates['fragment.renderer.inline'];
        }

        $container->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($a, $b);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }
}
