<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcad08ddd44fdba9a8a3e61da6e35e84f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitcad08ddd44fdba9a8a3e61da6e35e84f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcad08ddd44fdba9a8a3e61da6e35e84f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcad08ddd44fdba9a8a3e61da6e35e84f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
