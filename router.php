<?php

$routes = require('routes.php');

function routeToController($routes, $uri) {
    
    if(isset($routes[$uri])){
        require $routes[$uri];
    }
    
    abort();
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($routes, $uri);