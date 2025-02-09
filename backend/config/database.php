<?php

use Illuminate\Support\Str;

return [

    /*
    |----------------------------------------------------------------------
    | Default Database Connection Name
    |----------------------------------------------------------------------
    |
    | Ici, tu spécifies la connexion par défaut à utiliser pour les opérations
    | de base de données. Nous avons configuré cela pour Airtable par défaut.
    |
    */
    'default' => env('DB_CONNECTION', 'airtable'),

    /*
    |----------------------------------------------------------------------
    | Database Connections
    |----------------------------------------------------------------------
    |
    | Ici, tu définis toutes les connexions à tes bases de données.
    | Airtable n'utilise pas une base de données traditionnelle, donc cette
    | configuration se concentre uniquement sur la connexion Airtable.
    |
    */
    'connections' => [
        'airtable' => [
            'driver' => 'airtable',
            'api_key' => env('AIRTABLE_API_KEY'),
            'base_id' => env('AIRTABLE_BASE_ID'),
            'table' => env('AIRTABLE_TABLE_NAME'),
        ],

        // Commenter ou supprimer les autres connexions inutiles
        // 'sqlite' => [
        //     'driver' => 'sqlite',
        //     'url' => env('DB_URL'),
        //     'database' => env('DB_DATABASE', database_path('database.sqlite')),
        //     'prefix' => '',
        //     'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        //     'busy_timeout' => null,
        //     'journal_mode' => null,
        //     'synchronous' => null,
        // ],

        // 'mysql' => [
        //     'driver' => 'mysql',
        //     'url' => env('DB_URL'),
        //     'host' => env('DB_HOST', '127.0.0.1'),
        //     'port' => env('DB_PORT', '3306'),
        //     'database' => env('DB_DATABASE', 'laravel'),
        //     'username' => env('DB_USERNAME', 'root'),
        //     'password' => env('DB_PASSWORD', ''),
        //     'unix_socket' => env('DB_SOCKET', ''),
        //     'charset' => env('DB_CHARSET', 'utf8mb4'),
        //     'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
        //     'prefix' => '',
        //     'prefix_indexes' => true,
        //     'strict' => true,
        //     'engine' => null,
        //     'options' => extension_loaded('pdo_mysql') ? array_filter([
        //         PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
        //     ]) : [],
        // ],

    ],

    /*
    |----------------------------------------------------------------------
    | Migration Repository Table
    |----------------------------------------------------------------------
    |
    | Cette table garde une trace de toutes les migrations déjà exécutées.
    |
    */
    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],

    /*
    |----------------------------------------------------------------------
    | Redis Databases
    |----------------------------------------------------------------------
    |
    | Si tu utilises Redis, cette section définira les paramètres de connexion.
    |
    */
    'redis' => [
        'client' => env('REDIS_CLIENT', 'phpredis'),
        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],
    ],
];