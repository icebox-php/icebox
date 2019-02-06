<?php

ActiveRecord\Config::initialize(function($cfg)
{
   $database_config = include __DIR__.'/../database.php';
   $cfg->set_connections($database_config);
});
