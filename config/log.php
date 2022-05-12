<?php

return [
    'default' => env('LOG_TARGET', 'file'),

    'file' => [
        'class' => App\Logs\FileLogger::class,
    ],

    'db' => [
        'class' => App\Logs\DBLogger::class,
    ],

    'redis' => [
        'class' => App\Logs\RedisLogger::class,
    ]
];
