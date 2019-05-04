<?php

use ActiveRecord\Config as ArConfig;

// ArConfig::initialize(function($cfg)
// {
//    $database_config = include __DIR__.'/../database.php';
//    $cfg->set_connections($database_config);
// });

ArConfig::initialize(function($cfg)
{
   $database_config = include __DIR__.'/../database.php';
   $cfg->set_connections($database_config);
});
