<?php
session_start();
require_once '../vendor/autoload.php';

use App\controller\route\RouteController;







    RouteController::get('/index', [App\controller\parser\GetCurseController::class, 'getCurse']);
    RouteController::post('/index', [App\controller\parser\GetCurseController::class, 'getCurse']);
    RouteController::get('/store', [App\controller\parser\StoreParserController::class, 'store']);

    RouteController::get('/login', [App\controller\auth\AuthLoginGetController::class, 'getLogin']);
    RouteController::post('/login', [App\controller\auth\AuthStoreController::class, 'store']);
    RouteController::get('/register', [App\controller\auth\RegisterController::class, 'register']);
    RouteController::post('/register', [App\controller\auth\RegisterStore::class, 'store']);
    RouteController::get('/logout', [App\controller\SessionController::class, 'logout']);


if(!in_array($_SERVER['REQUEST_URI'], RouteController::$routes)){
    echo 'Такого адреса не существует';
}