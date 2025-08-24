<?php

class RouteServiceProvider
{
    static function boot()
    {
        $routes = require('routes.php');

        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

        if(isset($routes[$uri])){
            require $routes[$uri];
        }

    }
}