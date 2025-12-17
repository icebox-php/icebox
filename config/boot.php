<?php
// Set APP_ENV from environment or default to development
// if (!getenv('APP_ENV')) {
//     putenv('APP_ENV=development');
// }
// define('APP_ENV', getenv('APP_ENV'));
// define('APP_DEBUG', APP_ENV === 'development');

// Define root directory
define('ROOT_DIR', dirname(__DIR__));

// Load Composer autoloader
require_once ROOT_DIR . '/vendor/autoload.php';
