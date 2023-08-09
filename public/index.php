<?php
session_start();
require_once '../vendor/autoload.php';

use App\controller\route\RouteController;

    RouteController::get('/index', [App\controller\curse\CurseController::class, 'getCurse']);
    RouteController::post('/index', [App\controller\curse\CurseController::class, 'getCurse']);
    RouteController::get('/store', [App\controller\services\ParserService::class, 'store']);

    RouteController::get('/login', [App\controller\auth\AuthController::class, 'getLogin']);
    RouteController::post('/login', [App\controller\auth\AuthController::class, 'loginStore']);
    RouteController::get('/register', [App\controller\auth\AuthController::class, 'register']);
    RouteController::post('/register', [App\controller\auth\AuthController::class, 'registerStore']);
    RouteController::get('/logout', [App\controller\SessionController::class, 'logout']);


if(!in_array($_SERVER['REQUEST_URI'], RouteController::$routes)){
    echo 'Такого адреса не существует';
}