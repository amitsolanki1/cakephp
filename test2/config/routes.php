<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {
   
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) {
        $builder->connect('/', ['controller' => 'Tests', 'action' => 'index']);//, 'home']);
        // $builder->connect('/pages/*', 'Pages::display');

        $builder->fallbacks();
    });


};
