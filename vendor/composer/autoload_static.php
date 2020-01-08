<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf99b3de4715b78365fd6adb02e3d493e
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'ComposerAutoloaderInitf99b3de4715b78365fd6adb02e3d493e' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitf99b3de4715b78365fd6adb02e3d493e' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'ErrorHandler' => __DIR__ . '/../..' . '/composer-setup.php',
        'HttpClient' => __DIR__ . '/../..' . '/composer-setup.php',
        'Installer' => __DIR__ . '/../..' . '/composer-setup.php',
        'NoProxyPattern' => __DIR__ . '/../..' . '/composer-setup.php',
        'PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf99b3de4715b78365fd6adb02e3d493e::$classMap;

        }, null, ClassLoader::class);
    }
}
