<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit418b8a96a7653d8a3dba046b6dea2ba6
{
    public static $files = array (
        '17fd9fef37c97cfdc0c7794299a8423d' => __DIR__ . '/..' . '/vrana/notorm/NotORM.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpocean\\core\\' => 14,
        ),
        'a' => 
        array (
            'app\\models\\' => 11,
            'app\\controllers\\' => 16,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 26,
            'Doctrine\\Common\\Cache\\' => 22,
            'Doctrine\\Common\\Annotations\\' => 28,
            'Doctrine\\Common\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpocean\\core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'app\\models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'app\\controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
        'Doctrine\\Common\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector',
        ),
        'Doctrine\\Common\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache',
        ),
        'Doctrine\\Common\\Annotations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations',
        ),
        'Doctrine\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/common/lib/Doctrine/Common',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\DBAL\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/dbal/lib',
            ),
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
            'Doctrine\\Common\\Collections\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/collections/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit418b8a96a7653d8a3dba046b6dea2ba6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit418b8a96a7653d8a3dba046b6dea2ba6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit418b8a96a7653d8a3dba046b6dea2ba6::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
