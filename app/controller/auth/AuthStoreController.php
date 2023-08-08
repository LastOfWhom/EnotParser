<?php

namespace App\controller\auth;


use App\controller\QueryBuyeldier;
use App\controller\ValidateController;

class AuthStoreController extends ValidateController
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
        $this->chekLogin->check($resultValue, $this->db);

    }
}