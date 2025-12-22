<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false; // Let PHP serve the static file
}

// Bootstrap the application
require_once dirname(__DIR__) . '/config/boot.php';

session_start();

use Icebox\App;
use Icebox\Log;

// $project_directory = '/icebox-skeleton/public';
// $project_directory = '';

// $app = new App(__FILE__, $project_directory);
$app = new App(__FILE__);

// include ROOT_DIR . '/config/initializer.php';

$routes = include ROOT_DIR . '/config/routes.php';
$matcher = $routes->url_matcher();

// var_dump($matcher);

// Generate a unique request ID (UUID v4)
function generate_request_id(): string
{
    $length = 6;
    return bin2hex(random_bytes($length / 2));
}

$request_id = generate_request_id();
$start_time = microtime(true);

// Log request start
$method = $_SERVER['REQUEST_METHOD'] ?? 'CLI';
$path = $_SERVER['REQUEST_URI'] ?? '/';
$client_ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
$timestamp = gmdate('Y-m-d H:i:s') . ' +0000';

Log::info(sprintf('%s Started %s "%s" for %s at %s',
    $request_id, $method, $path, $client_ip, $timestamp));

// Determine controller/action for processing line
$controller_action = 'Unknown';
if ($matcher !== false) {
    $parts = explode('::', $matcher);
    if (count($parts) === 2) {
        $controller_action = $parts[0] . 'Controller#' . $parts[1];
    }
}

Log::info(sprintf('%s Processing by %s as HTML',
    $request_id, $controller_action));

$response = $app->handle($matcher);

$duration_ms = round((microtime(true) - $start_time) * 1000, 1);
$status = $response->getStatusCode();
$reason = $status >= 200 && $status < 300 ? 'OK' : 'Error';

Log::info(sprintf('%s Completed %d %s in %dms',
    $request_id, $status, $reason, $duration_ms));

$response->send();
