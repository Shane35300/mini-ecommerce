<?php

use Illuminate\Support\Str;

return [
    'default' => env('DB_CONNECTION', 'mysql'), // Remplace 'airtable' par 'mysql'

    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
        ],

        'airtable' => [
            'driver' => 'airtable',
            'api_key' => env('AIRTABLE_API_KEY'),
            'base_id' => env('AIRTABLE_BASE_ID'),
            'table' => env('AIRTABLE_TABLE_NAME'),
        ],
    ],
];