<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Controllers\\TasksController' => $baseDir . '/app/controllers/TasksController.php',
    'App\\Controllers\\UsersController' => $baseDir . '/app/controllers/UsersController.php',
    'App\\Core\\App' => $baseDir . '/core/App.php',
    'App\\Core\\Database\\Connection' => $baseDir . '/core/database/Connection.php',
    'App\\Core\\Database\\QueryBuilder' => $baseDir . '/core/database/QueryBuilder.php',
    'App\\Core\\Database\\TaskQuery' => $baseDir . '/core/database/TaskQuery.php',
    'App\\Core\\Database\\UserQuery' => $baseDir . '/core/database/UserQuery.php',
    'App\\Core\\Request' => $baseDir . '/core/Requests/Request.php',
    'App\\Core\\Router' => $baseDir . '/core/Router.php',
    'ComposerAutoloaderInit7c8f0a8154fcdea89657ac618ee8ac86' => $vendorDir . '/composer/autoload_real.php',
    'Composer\\Autoload\\ClassLoader' => $vendorDir . '/composer/ClassLoader.php',
    'Composer\\Autoload\\ComposerStaticInit7c8f0a8154fcdea89657ac618ee8ac86' => $vendorDir . '/composer/autoload_static.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'TaskRequest' => $baseDir . '/core/Requests/TaskRequest.php',
    'UserRequest' => $baseDir . '/core/Requests/UserRequest.php',
);