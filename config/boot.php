<?php
// Set APP_ENV from environment or default to development
// if (!getenv('APP_ENV')) {
//     putenv('APP_ENV=development');
// }
// define('APP_ENV', getenv('APP_ENV'));
// define('APP_DEBUG', APP_ENV === 'development');

#----------------------
# Define root directory
define('ROOT_DIR', dirname(__DIR__));

#-------------------------
# Load Composer autoloader
require_once ROOT_DIR . '/vendor/autoload.php';

# set basePath
$basePath = dirname(__DIR__);
Icebox\App::setBasePath($basePath);

#-------------------------------
# Set APP_ENV if not already set
if(Icebox\Utils::env('APP_ENV') === null) {
    if (isset($argv[1]) && $argv[1] === 'test') {
        $_ENV['APP_ENV'] = 'test';
    } else {
        $_ENV['APP_ENV'] = 'development';
    }
}

#---------------------------
# Load environment variables
$env_file_error = null;
$env_file = dirname(__DIR__) . '/.env.'.Icebox\Utils::env('APP_ENV');
if(file_exists($env_file)) {
  $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__), '.env.'.Icebox\Utils::env('APP_ENV'));
  $dotenv->load();
} else {
  $env_file_error = '.env.'.Icebox\Utils::env('APP_ENV') . ' file not found';
}

#---------------------------
# Add handlers (no default handlers - you must add at least one)
Icebox\Log::addFileHandler(dirname(__DIR__) . '/log/' . Icebox\Utils::env('APP_ENV') . '.log');
Icebox\Log::addStdoutHandler(); // For CLI output
Icebox\Log::addSyslogHandler(); // For Syslog output

#--------------------
# show env_file error
if($env_file_error !== null) {
  Icebox\Log::warning($env_file_error);
}

// Log messages
// Icebox\Log::info('User logged in');
// Icebox\Log::error('Database connection failed', ['db' => 'primary']);
// Icebox\Log::debug('Processing request', ['method' => 'GET']);

require 'application.php'; // set configurations here
require 'environments/' . Icebox\Utils::env('APP_ENV') . '.php'; // add or override configutions here