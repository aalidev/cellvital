<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerS1rYklo\CoreShopware_Core_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerS1rYklo/CoreShopware_Core_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerS1rYklo.legacy');

    return;
}

if (!\class_exists(CoreShopware_Core_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerS1rYklo\CoreShopware_Core_KernelDevDebugContainer::class, CoreShopware_Core_KernelDevDebugContainer::class, false);
}

return new \ContainerS1rYklo\CoreShopware_Core_KernelDevDebugContainer([
    'container.build_hash' => 'S1rYklo',
    'container.build_id' => '84e712ab',
    'container.build_time' => 1595956107,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerS1rYklo');
