<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIUXvZIe\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIUXvZIe/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIUXvZIe.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIUXvZIe\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIUXvZIe\App_KernelDevDebugContainer([
    'container.build_hash' => 'IUXvZIe',
    'container.build_id' => 'a6ea982b',
    'container.build_time' => 1644072970,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIUXvZIe');