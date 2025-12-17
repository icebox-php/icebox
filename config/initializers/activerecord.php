<?php

use Icebox\ActiveRecord\Config as ArConfig;

// ArConfig::initialize(function($cfg)
// {
//    $database_config = include __DIR__.'/../database.php';
//    $cfg->set_connections($database_config);
// });

// ArConfig::initialize(function($cfg)
// {
//    $database_config = include __DIR__.'/../database.php';
//    $cfg->set_connections($database_config);
// });

ArConfig::initialize(function() {
   return [
      'driver' => 'sqlite',
      'database' => ':memory:',
      'username' => '',
      'password' => ''
      // Note: 'host' and 'charset' are not used for SQLite; if you need this, create PR
      // The Config class handles SQLite DSN specially
   ];
});
