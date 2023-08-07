<?php
session_start();
require_once '../../vendor/autoload.php';

use App\controller\route\RouteController;

$temp = new \League\Plates\Engine('../app/view');
var_dump($temp);die;



var_dump($_SESSION);


if(isset($_SESSION['user'])){
    RouteController::get('/index', [App\controller\parser\GetCurseController::class, 'getCurse']);
    RouteController::post('/index', [App\controller\parser\StoreParserController::class, 'store']);
}
    RouteController::get('/login', [App\controller\auth\AuthLoginGet::class, 'getLogin']);
    RouteController::post('/login', [App\controller\auth\AuthStore::class, 'store']);
    RouteController::get('/register', [App\controller\auth\RegisterController::class, 'register']);
    RouteController::post('/register', [App\controller\auth\RegisterStore::class, 'store']);


if(!in_array($_SERVER['REQUEST_URI'], RouteController::$routes)){
    echo 'Такого адреса не существует';
}