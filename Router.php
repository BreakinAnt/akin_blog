<?php

class Router {
    public static function __callStatic($name, $arguments): void
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
                throw new BadMethodCallException("Method $name does not exist.");
                break;
        }

        if(!$isMethod){
            abort(Response::NOT_FOUND, 'Page Not Found');
        }

        [ $controller, $function ] = explode('@', $arguments[0]);
        
        if(!$function) {
            $function = 'index';
        }

        require 'controllers/' . $controller . '.php';

        $controllerInstance = new $controller();

        $controllerInstance->$function();

        return;
    }
}
