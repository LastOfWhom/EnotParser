<?php
session_start();
require_once '../../vendor/autoload.php';

use App\controller\route\RouteController;

RouteController::get('/', [App\controller\parser\ParserController::class, 'getValueWithPage']);
RouteController::get('/login', [App\controller\auth\AuthLoginGet::class, 'getLogin']);
RouteController::post('/login', [App\controller\auth\AuthStore::class, 'store']);
RouteController::get('/register', [App\controller\auth\RegisterController::class, 'register']);
RouteController::post('/register', [App\controller\auth\RegisterStore::class, 'store']);

if(!in_array($_SERVER['REQUEST_URI'], RouteController::$routes)){
    echo 'Такого адреса не существует';
}