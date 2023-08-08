<?php

namespace App\controller\auth;


use App\controller\QueryBuyeldier;
use App\controller\ValidateController;

class RegisterStore extends ValidateController
{
    private $db;

    public function __construct(QueryBuyeldier $queryBuyeldier)
    {
        $this->db = $queryBuyeldier;
    }

    public function store()
    {
        $result = $this->validateValue($_POST);
        $this->db->insert('users',['login' => $result['login'], 'password' => password_hash($result['password'], PASSWORD_DEFAULT)]);
        header('Location: /login');
    }
}