<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita82e24de612fd5c2eefb1317dbfd9da6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Arquitetura\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Arquitetura\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita82e24de612fd5c2eefb1317dbfd9da6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita82e24de612fd5c2eefb1317dbfd9da6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita82e24de612fd5c2eefb1317dbfd9da6::$classMap;

        }, null, ClassLoader::class);
    }
}
