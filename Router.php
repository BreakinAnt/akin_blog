<?php

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

        require_once 'controllers/' . $controller . '.php';

        $controllerInstance = new $controller();

        return ['controller' => $controllerInstance, 'renderFunction' => $function];
    }
}
