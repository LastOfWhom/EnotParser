<?php

namespace App\controller\auth;

use App\controller\Controller;
use App\controller\SessionController;

class CheckLoginController extends Controller
{
    public function check($data, $db)
    {
        $users = $db->select('users');
        foreach ($users as $user) {
            if ($user['login'] == $data['login'] && password_verify($data['password'], $user['password'])) {
//                $_SESSION['user'] = $user['login'];
                SessionController::set('user', $user['login']);
                header('Location: /index');
                die;
            }
        }
        SessionController::set('login', 'Неправильный логин или пароль');
//        $_SESSION['login'] = 'Неправильный логин или пароль';
        header('Location: /login');
        die;
    }
}