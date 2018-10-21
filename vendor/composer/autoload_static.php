<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf88418f12a8a2d316e10f6fd3e7d3068
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'thiagoalessio\\TesseractOCR\\' => 27,
        ),
        'I' => 
        array (
            'IPTT\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'thiagoalessio\\TesseractOCR\\' => 
        array (
            0 => __DIR__ . '/..' . '/thiagoalessio/tesseract_ocr/src',
        ),
        'IPTT\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf88418f12a8a2d316e10f6fd3e7d3068::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf88418f12a8a2d316e10f6fd3e7d3068::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
