<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXcEbhTU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXcEbhTU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXcEbhTU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXcEbhTU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXcEbhTU\App_KernelDevDebugContainer([
    'container.build_hash' => 'XcEbhTU',
    'container.build_id' => '873f254e',
    'container.build_time' => 1715208826,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXcEbhTU');
