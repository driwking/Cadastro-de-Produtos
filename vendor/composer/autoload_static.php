<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcad08ddd44fdba9a8a3e61da6e35e84f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PizzariaJacinthos\\Composer\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PizzariaJacinthos\\Composer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcad08ddd44fdba9a8a3e61da6e35e84f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcad08ddd44fdba9a8a3e61da6e35e84f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcad08ddd44fdba9a8a3e61da6e35e84f::$classMap;

        }, null, ClassLoader::class);
    }
}
