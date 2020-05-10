<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c9ac81b0a8731855da9974ce1ad8849
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Library\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Library\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Library\\Email' => __DIR__ . '/../..' . '/src/Email.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c9ac81b0a8731855da9974ce1ad8849::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c9ac81b0a8731855da9974ce1ad8849::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5c9ac81b0a8731855da9974ce1ad8849::$classMap;

        }, null, ClassLoader::class);
    }
}
