<?php

session_start();

require_once __DIR__.'/../vendor/autoload.php';

use Icebox\App;
use Icebox\Controller;
use Icebox\Request;
use Icebox\Response;

define('WARNING', true);
define('DEBUG', true);

// define('ICEBOX_DIRECTORY_PUBLIC', __DIR__);
// define('ICEBOX_DIRECTORY_SRC', dirname(__DIR__).'/src');

define('ROOT_DIR', dirname(__DIR__));

$project_directory = '/icebox-local/public';

$index_page = '/index.php';


$app = new App(__FILE__, $project_directory);

include ROOT_DIR.'/config/initializers.php';

$routes = include ROOT_DIR.'/config/routes.php';
$matcher = $routes->url_matcher();

// var_dump($matcher);

$response = $app->handle($matcher);
$response->send();
