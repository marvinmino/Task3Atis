<?php

return [
    'database' => [
        'name' => 'task3',
        'username' => 'phpmyadmin',
        'password' => 'hoho',
        'connection' => 'mysql:host=localhost:3306',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
