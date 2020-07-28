<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb25cb2237260c538914a8d78882114f6
{
    public static $files = array (
        '9b38cf48e83f5d8f60375221cd213eee' => __DIR__ . '/..' . '/phpstan/phpstan/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPStan\\ExtensionInstaller\\' => 27,
            'PHPStan\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPStan\\ExtensionInstaller\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpstan/extension-installer/src',
        ),
        'PHPStan\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpstan/phpstan-phpunit/src',
            1 => __DIR__ . '/..' . '/phpstan/phpstan-symfony/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb25cb2237260c538914a8d78882114f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb25cb2237260c538914a8d78882114f6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
