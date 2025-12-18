<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false; // Let PHP serve the static file
}

$env_file = dirname(__DIR__) . '/vendor/icebox-php/framework/src/env.php';
if (!file_exists($env_file)) {
    echo "Error: src/env.php not found at $env_file. Run 'composer install' first.\n";
    exit(1);
}
require_once $env_file;

// Set APP_ENV if not already set
/** @disregard P1010 Undefined function */
if(env('APP_ENV') === null) {
    if (isset($argv[1]) && $argv[1] === 'test') {
        $_ENV['APP_ENV'] = 'test';
    } else {
        $_ENV['APP_ENV'] = 'development';
    }
}

// Bootstrap the application
require_once dirname(__DIR__) . '/config/boot.php';

session_start();

use Icebox\App;

// $project_directory = '/icebox-skeleton/public';
// $project_directory = '';

// $app = new App(__FILE__, $project_directory);
$app = new App(__FILE__);

include ROOT_DIR . '/config/initializer.php';

$routes = include ROOT_DIR . '/config/routes.php';
$matcher = $routes->url_matcher();

// var_dump($matcher);

$response = $app->handle($matcher);
$response->send();
