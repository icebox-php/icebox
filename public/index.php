<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false; // Let PHP serve the static file
}

// Bootstrap the application
require_once dirname(__DIR__) . '/config/boot.php';

session_start();

use Icebox\App;
use Icebox\Routing;
use Icebox\Web;

// $app = new App(__FILE__);
// $routes = include ROOT_DIR . '/config/routes.php';

// $web = new Web();
// $web->run();
define('DEBUG', true);
Web::run();
