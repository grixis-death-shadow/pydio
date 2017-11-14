<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec18b6cb16b16d66e8138e8deba8d4fb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pydio\\Access\\Driver\\DataProvider\\Provisioning\\' => 46,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pydio\\Access\\Driver\\DataProvider\\Provisioning\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Pydio\\Access\\Driver\\DataProvider\\Provisioning\\AbstractManager' => __DIR__ . '/../..' . '/src/AbstractManager.php',
        'Pydio\\Access\\Driver\\DataProvider\\Provisioning\\ActionsManager' => __DIR__ . '/../..' . '/src/ActionsManager.php',
        'Pydio\\Access\\Driver\\DataProvider\\Provisioning\\ConfAccessDriver' => __DIR__ . '/../..' . '/src/ConfAccessDriver.php',
        'Pydio\\Access\\Driver\\DataProvider\\Provisioning\\DiagnosticManager' => __DIR__ . '/../..' . '/src/DiagnosticManager.php',
        'Pydio\\Access\\Driver\\DataProvider\\Provisioning\\DocumentationManager' => __DIR__ . '/../..' . '/src/DocumentationManager.php',
        'Pydio\\Access\\Driver\\DataProvider\\Provisioning\\LogsManager' => __DIR__ . '/../..' . '/src/LogsManager.php',
        'Pydio\\Access\\Driver\\DataProvider\\Provisioning\\PluginsManager' => __DIR__ . '/../..' . '/src/PluginsManager.php',
        'Pydio\\Access\\Driver\\DataProvider\\Provisioning\\RepositoriesManager' => __DIR__ . '/../..' . '/src/RepositoriesManager.php',
        'Pydio\\Access\\Driver\\DataProvider\\Provisioning\\RolesManager' => __DIR__ . '/../..' . '/src/RolesManager.php',
        'Pydio\\Access\\Driver\\DataProvider\\Provisioning\\TreeManager' => __DIR__ . '/../..' . '/src/TreeManager.php',
        'Pydio\\Access\\Driver\\DataProvider\\Provisioning\\UsersManager' => __DIR__ . '/../..' . '/src/UsersManager.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec18b6cb16b16d66e8138e8deba8d4fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec18b6cb16b16d66e8138e8deba8d4fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec18b6cb16b16d66e8138e8deba8d4fb::$classMap;

        }, null, ClassLoader::class);
    }
}
