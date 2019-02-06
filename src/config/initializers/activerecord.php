<?php

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
