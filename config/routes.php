<?php

use Icebox\Routing;

$route = new Routing();

$route->get('/', 'Page::home');

$route->get('leap_year/:year', 'LeapYear::index');

$route->get('flash_message', 'Page::flash_message');

$route->get('about/:category/item/:id/title/:title', 'Page::about');

// $route->get('posts', 'Page::posts');

$route->resource('posts', 'Posts');

return $route;
