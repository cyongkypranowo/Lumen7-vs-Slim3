<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // Database Settings
        'db' => [
            'host' => 'localhost',
            'user' => 'root',
            'pass' => '',
            'dbname' => 'train_db',
            'driver' => 'mysql'
        ],

        // jwt settings
        "jwt" => [
            'secret' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJsdW1lbiByaXNldCIsImlhdCI6MTU3NTEwMzI5NCwiZXhwIjoxNjA2NjM5Mjk0LCJhdWQiOiJodHRwOi8vcmVzZWFyY2hsdW1lbi5sb2thbC8iLCJzdWIiOiJjb2tyb3lvbmdreXBAZ21haWwuY29tIiwiR2l2ZW5OYW1lIjoiQ29rcm8gWW9uZ2t5IFByYW5vd28iLCJTdXJuYW1lIjoieW9uZ2t5IiwiRW1haWwiOiJjb2tyb3lvbmdreXBAR21haWwuY29tIiwiUm9sZSI6WyJXZWJEZXYiLCJQcm9qZWN0IEFkbWluaXN0cmF0b3IiXX0.C3Z_Bn2vgsh16jrKmQ4NO1LMKWHFHv2hEB-3k_kVVBs'
        ],
    ],
];
