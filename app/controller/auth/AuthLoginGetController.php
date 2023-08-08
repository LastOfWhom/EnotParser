<?php

namespace App\controller\auth;

use App\controller\Controller;

class AuthLoginGetController extends Controller
{
    public function getLogin(){
         echo $this->templates->render('login');
    }
}