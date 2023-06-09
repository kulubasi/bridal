<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05d01fc8de711e7cbbc7abec86688b97
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05d01fc8de711e7cbbc7abec86688b97::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05d01fc8de711e7cbbc7abec86688b97::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit05d01fc8de711e7cbbc7abec86688b97::$classMap;

        }, null, ClassLoader::class);
    }
}
