<?php

namespace App\controller;

class SessionController
{
    public static function check()
    {
        if(!isset($_SESSION['user'])){
            header('Location: /login');
            die;
        }
    }
    public static function logout()
    {
        unset($_SESSION['user']);
        header('Location: /login');
        die;
    }
    public static function get()
    {
        return $_SESSION['user'];
    }
    public static function set($name, $message){
        $_SESSION[$name] = $message;
    }
}