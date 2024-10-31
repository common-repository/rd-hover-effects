<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit62454f09533e1c5e7fff2ebeaee2cdca
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rdhe\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rdhe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit62454f09533e1c5e7fff2ebeaee2cdca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit62454f09533e1c5e7fff2ebeaee2cdca::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
