<?php

namespace App\controller\auth;

class CheckLoginController
{
    public function check($data, $db)
    {
        $users = $db->select('users');
        foreach ($users as $user) {
            if ($user['login'] == $data['login'] && password_verify($data['password'], $user['password'])) {
                header('Location: /index');
                die;
            }
        }
        $_SESSION['login'] = 'Неправильный логин или пароль';
        header('Location: /login');
        die;
    }
}