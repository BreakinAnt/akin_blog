<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];

function routeToController($routes, $uri) {
    
    if(isset($routes[$uri])){
        require $routes[$uri];
    }
    
    abort();
}

routeToController($routes, $uri);