<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit66936920ff56425504fa5db25f4f9179
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

        spl_autoload_register(array('ComposerAutoloaderInit66936920ff56425504fa5db25f4f9179', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit66936920ff56425504fa5db25f4f9179', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit66936920ff56425504fa5db25f4f9179::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
