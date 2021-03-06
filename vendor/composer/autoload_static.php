<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09410901d9e657c8ed0e393ab26367ec
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jsnlib\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jsnlib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit09410901d9e657c8ed0e393ab26367ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09410901d9e657c8ed0e393ab26367ec::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
