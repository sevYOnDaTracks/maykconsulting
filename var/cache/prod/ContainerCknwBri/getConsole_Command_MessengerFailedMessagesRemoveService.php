<?php

namespace ContainerCknwBri;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerFailedMessagesRemoveService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.messenger_failed_messages_remove' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\FailedMessagesRemoveCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.messenger_failed_messages_remove'] = $instance = new \Symfony\Component\Messenger\Command\FailedMessagesRemoveCommand('failed', ($container->privates['.service_locator.Y4J.A.e'] ?? $container->load('get_ServiceLocator_Y4J_A_EService')), ($container->privates['messenger.transport.native_php_serializer'] ??= new \Symfony\Component\Messenger\Transport\Serialization\PhpSerializer()));

        $instance->setName('messenger:failed:remove');
        $instance->setDescription('Remove given messages from the failure transport');

        return $instance;
    }
}
