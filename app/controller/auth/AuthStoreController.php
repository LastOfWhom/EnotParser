<?php

namespace App\controller\auth;



use App\controller\ValidateController;

class AuthStoreController extends ValidateController
{
    public function store(){
        $resultValue = $this->validateValue($_POST);
        $this->check($resultValue, $this->db);
    }
}