<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXrAl3xZ\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXrAl3xZ/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerXrAl3xZ.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerXrAl3xZ\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerXrAl3xZ\App_KernelProdContainer([
    'container.build_hash' => 'XrAl3xZ',
    'container.build_id' => '0b39fe90',
    'container.build_time' => 1680782767,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXrAl3xZ');