<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf055dd198c78816be8619e37969ea439
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JsonSchema\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JsonSchema\\' => 
        array (
            0 => __DIR__ . '/..' . '/justinrainbow/json-schema/src/JsonSchema',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf055dd198c78816be8619e37969ea439::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf055dd198c78816be8619e37969ea439::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
