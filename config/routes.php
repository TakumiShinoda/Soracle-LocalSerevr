<?php

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/soracle/*', ['controller' => 'Soracle', 'action'=> 'index', 'post']);
    $routes->connect('/soracle/post', ['controller' => 'Soracle', 'action'=> 'post']);
    $routes->connect('/soracle/delete', ['controller' => 'Soracle', 'action'=> 'delete']);
    $routes->fallbacks(DashedRoute::class);
});

Plugin::routes();
