<?php

Icebox\Config::set([
    'app_host' => 'localhost:8800',
    'force_ssl' => false, // if you set it false, Icebox will use scheme from request
    'asset_host' => 'http://localhost:8800/assets',
    'log_level' => 'debug',
    'debug' => true,
]);
