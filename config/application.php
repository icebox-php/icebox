<?php
return [
    // Application environment
    'env' => APP_ENV,
    'debug' => APP_DEBUG,
    
    // Application directories
    'root_dir' => ROOT_DIR,
    'public_dir' => ROOT_DIR . '/public',
    'src_dir' => ROOT_DIR . '/src',
    
    // Database configuration (can be overridden per environment)
    'database' => [
        'driver' => 'sqlite',
        'database' => ROOT_DIR . '/db/development.sqlite3',
        'username' => '',
        'password' => '',
    ],
    
    // Session settings
    'session' => [
        'name' => 'icebox_session',
        'lifetime' => 7200, // 2 hours
        'secure' => false,
    ],
    
    // Additional application-specific settings
];
