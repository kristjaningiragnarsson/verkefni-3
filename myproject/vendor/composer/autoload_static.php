<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65c24ddbb5817c30e326c973ae6ca4f0
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mini\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mini\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit65c24ddbb5817c30e326c973ae6ca4f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65c24ddbb5817c30e326c973ae6ca4f0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
