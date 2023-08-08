<?php

namespace App\controller\auth;



use App\controller\ValidateController;

class RegisterStoreController extends ValidateController
{
    public function store()
    {
        $result = $this->validateValue($_POST);
        $this->db->insert('users',['login' => $result['login'], 'password' => password_hash($result['password'], PASSWORD_DEFAULT)]);
        header('Location: /login');
    }
}