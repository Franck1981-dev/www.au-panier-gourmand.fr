<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGk14kP0\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGk14kP0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGk14kP0.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGk14kP0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGk14kP0\App_KernelDevDebugContainer([
    'container.build_hash' => 'Gk14kP0',
    'container.build_id' => 'f32c67f3',
    'container.build_time' => 1643873245,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGk14kP0');
