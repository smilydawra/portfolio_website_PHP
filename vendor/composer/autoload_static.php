<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit782f58ccf8249c94936327169fd4a4c7
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Capstone\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Capstone\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit782f58ccf8249c94936327169fd4a4c7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit782f58ccf8249c94936327169fd4a4c7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
