<?php

namespace App\controller\route;

use App\controller\auth\CheckLoginController;
use App\controller\QueryBuyeldier;

class RouteController
{
    static public $routes = [];
    public static function get($uri, $action)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if($uri == $_SERVER['REQUEST_URI'] && $method == 'GET'){
            $controller = new $action[0];
            $method = $action[1];
            $controller->$method();
        }
        self::$routes[] = $uri;
    }
    public static function post($uri, $action)
    {
        $checkLoginController = new CheckLoginController();
        $queryBuyeldier = new QueryBuyeldier();
        $method = $_SERVER['REQUEST_METHOD'];
        if($uri == $_SERVER['REQUEST_URI'] && $method == 'POST')
        {
            $controller = new $action[0]($queryBuyeldier, $checkLoginController);
            $method = $action[1];
            $controller->$method();
        }
        self::$routes[] = $uri;
    }
}