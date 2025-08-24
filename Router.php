<?php
namespace App;

class Router {
    public static function __callStatic($name, $arguments)
    {
        switch($name) {
            case 'get':
            case 'post':
            case 'put':
            case 'delete':
            case 'patch':
                $isMethod = $_SERVER['REQUEST_METHOD'] === strtoupper($name);
                break;
            default:
                throw new \BadMethodCallException("Method $name does not exist.");
        }

        if(!$isMethod){
            return null;
        }

        [ $controller, $function ] = explode('@', $arguments[0]);
        if(!$function) {
            $function = 'index';
        }

        $controllerClass = 'App\\Controllers\\' . $controller;
        $controllerInstance = new $controllerClass();

        return ['controller' => $controllerInstance, 'renderFunction' => $function];
    }

    public static function group(...$routes)
    {
        foreach($routes as $route) {
            if($route){
                return $route;
            }
        }
    }
}
