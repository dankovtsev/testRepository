<?php

return
[
    'paths' => [
        'migrations' => __DIR__ . '/src/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',

        'development' => [
            'adapter' => 'mysql',
            'host' => 'mariadb',
            'name' => 'Test',
            'user' => 'root',
            'pass' => 'rootsecret',
            'port' => '3306',
            'charset' => 'utf8',
        ],
    ],
    'version_order' => 'creation'
];
