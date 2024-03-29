<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PublicMessage extends \App\Entity\PublicMessage implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'dateTimeReception' => [parent::class, 'dateTimeReception', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'senderEmail' => [parent::class, 'senderEmail', null],
        "\0".parent::class."\0".'senderMessage' => [parent::class, 'senderMessage', null],
        "\0".parent::class."\0".'senderName' => [parent::class, 'senderName', null],
        'dateTimeReception' => [parent::class, 'dateTimeReception', null],
        'id' => [parent::class, 'id', null],
        'senderEmail' => [parent::class, 'senderEmail', null],
        'senderMessage' => [parent::class, 'senderMessage', null],
        'senderName' => [parent::class, 'senderName', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
