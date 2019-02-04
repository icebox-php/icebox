<?php

define('PHP_ACTIVERECORD_AUTOLOAD_DISABLE', true);

// $db = include '../database.php';
// $dev = $db['development'];
// $test = $db['test'];
// $prod = $db['production'];

// function prepare_db_connection_string($environment) {
// }

ActiveRecord\Config::initialize(function($cfg)
{
   $cfg->set_connections(
     array(
       'development' => 'mysql://ice-box:ice-box@localhost/ice-box',
       'test' => 'mysql://username:password@localhost/test_database_name',
       'production' => 'mysql://username:password@localhost/production_database_name'
     )
   );
});
