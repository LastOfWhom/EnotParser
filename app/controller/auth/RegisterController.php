<?php

namespace App\controller\auth;

use App\controller\Controller;

class RegisterController extends Controller
{
    public function register(){
        echo $this->templates->render('register');
    }
}