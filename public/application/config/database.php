<?php

return [
    'default-connection' => 'concrete',
    'connections' => [
        'concrete' => [
            'driver' => 'concrete_pdo_mysql',
            'server' => 'db',
            'database' => 'db',
            'username' => 'db',
            'password' => 'db',
            'character_set' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
        ],
    ],
];
