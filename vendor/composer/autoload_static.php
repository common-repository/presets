<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit414f618ce94e09423ef6ffb121e2921e
{
    public static $files = array (
        '6d87be4129ad80e32405f0020c221f3e' => __DIR__ . '/..' . '/cmb2/cmb2/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Presets\\Modules\\' => 16,
            'Presets\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Presets\\Modules\\' => 
        array (
            0 => __DIR__ . '/../..' . '/modules',
        ),
        'Presets\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit414f618ce94e09423ef6ffb121e2921e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit414f618ce94e09423ef6ffb121e2921e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit414f618ce94e09423ef6ffb121e2921e::$classMap;

        }, null, ClassLoader::class);
    }
}
