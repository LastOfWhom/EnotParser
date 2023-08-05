<?php

namespace App\controller\route;

class RouteController
{
    public static function get($uri, $action)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if($uri == $_SERVER['REQUEST_URI'] && $method == 'GET'){
            $controller = new $action[0];
            $method = $action[1];
            $controller->$method();
        }
    }
    public static function post($uri, $action)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if($uri == $_SERVER['REQUEST_URI'] && $method == 'POST'){
            $controller = new $action[0];
            $method = $action[1];
            $controller->$method();
        }
    }
}