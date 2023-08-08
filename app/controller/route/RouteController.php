<?php

namespace App\controller\route;

use App\controller\auth\CheckLoginController;
use App\controller\QueryBuyeldier;
use League\Plates\Engine;
use DI\ContainerBuilder;
class RouteController
{
    static public $routes = [];
    static public $container;

    public static function get($uri, $action)
    {
        $queryBuyeldier = new QueryBuyeldier();
        $engine = new Engine();
        $method = $_SERVER['REQUEST_METHOD'];
        if($uri == $_SERVER['REQUEST_URI'] && $method == 'GET'){
            $controller = new $action[0]($queryBuyeldier, $engine);
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