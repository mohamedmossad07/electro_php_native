<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita6f684c20b2557bff3cfcf4e961d3c1b
{
    public static $files = array (
        'f32902f145fce7a432f59959f59e5a18' => __DIR__ . '/../..' . '/app/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita6f684c20b2557bff3cfcf4e961d3c1b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita6f684c20b2557bff3cfcf4e961d3c1b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita6f684c20b2557bff3cfcf4e961d3c1b::$classMap;

        }, null, ClassLoader::class);
    }
}