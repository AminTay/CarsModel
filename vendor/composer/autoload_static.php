<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite88c5f05dc7f562fd973e15c17f824b5
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite88c5f05dc7f562fd973e15c17f824b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite88c5f05dc7f562fd973e15c17f824b5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite88c5f05dc7f562fd973e15c17f824b5::$classMap;

        }, null, ClassLoader::class);
    }
}
