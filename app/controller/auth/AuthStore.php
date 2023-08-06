<?php

namespace App\controller\auth;


use App\controller\QueryBuyeldier;
use App\controller\ValidateController;

class AuthStore extends ValidateController
{
    private $db;
    private $chekLogin;
    public function __construct(QueryBuyeldier $queryBuyeldier, checkLoginController $checkLoginController)
    {
        $this->db = $queryBuyeldier;
        $this->chekLogin = $checkLoginController;
    }

    public function store(){
        $resultValue = $this->validateValue($_POST);
        $this->chekLogin->check();

//        $users = $this->db->select('users');
//        var_dump($users);
    }
}