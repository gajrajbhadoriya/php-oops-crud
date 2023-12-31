<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37815b06b026f9667c7bd90bbcfaffb9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit37815b06b026f9667c7bd90bbcfaffb9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37815b06b026f9667c7bd90bbcfaffb9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37815b06b026f9667c7bd90bbcfaffb9::$classMap;

        }, null, ClassLoader::class);
    }
}
