<?php

class RouteServiceProvider
{
    static function boot()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
        $routes = require('routes.php');

        if(!isset($routes[$uri])){
            abort(Response::NOT_FOUND, 'Page Not Found');
        }

        $route = $routes[$uri];
        $controller = $route['controller'];
        $renderFunction = $route['renderFunction'];

        $controller->$renderFunction();
    }
}