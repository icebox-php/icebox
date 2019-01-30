<?php

session_start();

require_once __DIR__.'/../vendor/autoload.php';

use Icebox\App;
use Icebox\Controller;
use Icebox\Request;
use Icebox\Response;

$project_directory = '/icebox/public';

$index_page = '/index.php';


$app = new App(__FILE__, $project_directory);


$routes = include __DIR__.'/../src/config/routes.php';
$matcher = $routes->url_matcher();

// var_dump($matcher);

$response = $app->handle($matcher);
$response->send();
