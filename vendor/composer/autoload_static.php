<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a7371f40bbb464088f034419ff6f155
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Articles\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Articles\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/MyProject/Articles',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a7371f40bbb464088f034419ff6f155::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a7371f40bbb464088f034419ff6f155::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a7371f40bbb464088f034419ff6f155::$classMap;

        }, null, ClassLoader::class);
    }
}
