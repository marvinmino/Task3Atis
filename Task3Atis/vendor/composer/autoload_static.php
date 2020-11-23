<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c8f0a8154fcdea89657ac618ee8ac86
{
    public static $files = array (
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
    );

    public static $classMap = array (
        'App\\Controllers\\TasksController' => __DIR__ . '/../..' . '/app/controllers/TasksController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'App\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'App\\Core\\Database\\TaskQuery' => __DIR__ . '/../..' . '/core/database/TaskQuery.php',
        'App\\Core\\Database\\UserQuery' => __DIR__ . '/../..' . '/core/database/UserQuery.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Requests/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ComposerAutoloaderInit7c8f0a8154fcdea89657ac618ee8ac86' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit7c8f0a8154fcdea89657ac618ee8ac86' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'TaskRequest' => __DIR__ . '/../..' . '/core/Requests/TaskRequest.php',
        'UserRequest' => __DIR__ . '/../..' . '/core/Requests/UserRequest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit7c8f0a8154fcdea89657ac618ee8ac86::$classMap;

        }, null, ClassLoader::class);
    }
}