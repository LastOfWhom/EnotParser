<?php

require_once '../../vendor/autoload.php';

use App\controller\route\RouteController;

RouteController::get('/', [App\controller\parser\ParserController::class, 'getValueWithPage']);
RouteController::get('/login', [App\controller\auth\AuthStore::class, 'store']);