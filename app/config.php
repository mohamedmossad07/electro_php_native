<?php
return [
    'db' => [
        'host' => 'localhost',
        'port' => 3307,
        'dbname' => 'shop',
        'driver' => 'mysql',
        'charset' => 'utf8',
        'auth' => [
            'user' => 'root',
            'pass' => 'root'
        ],
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
