<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRCZrsfD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRCZrsfD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRCZrsfD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRCZrsfD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRCZrsfD\App_KernelDevDebugContainer([
    'container.build_hash' => 'RCZrsfD',
    'container.build_id' => 'c743d23e',
    'container.build_time' => 1680847118,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRCZrsfD');
