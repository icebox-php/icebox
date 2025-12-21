<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false; // Let PHP serve the static file
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
