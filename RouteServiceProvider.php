<?php

class RouteServiceProvider
{
    static function boot(): void
    {
        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
        $routes = require('routes.php');

        if(!isset($routes[$uri])){
            foreach($routes as $path => $route) {

                preg_match_all('/\/{.*?\}/', $path, $slugs);
                $slugs = $slugs[0];
                
                $cleanPath = str_replace($slugs, '', $path);

                preg_match_all('/\\/[^\\/]+/', str_replace($cleanPath, '', $uri), $uriSlugs);
                $uriSlugs = $uriSlugs[0];

                $cleanUri = str_replace($uriSlugs, '', $uri);

                $uriAndPathIsEqual = $cleanUri === $cleanPath;

                if(!$uriAndPathIsEqual) {
                    continue;
                }

                if(count($slugs) !== count($uriSlugs)) {
                    continue;
                }

                $controller = $route['controller'];
                $renderFunction = $route['renderFunction'];

                $parameters = explode('/', trim($uri, '/'));

                $controller->$renderFunction(...$parameters);
                return;
            }

            return;
        }

        $route = $routes[$uri];
        $controller = $route['controller'];
        $renderFunction = $route['renderFunction'];

        $controller->$renderFunction();
    }
}