<?php

namespace App\controller\auth;



use App\controller\Controller;
use App\controller\SessionController;

class AuthController extends Controller
{
    public function loginStore(){
        $resultValue = $this->validateValue($_POST);
        $this->check($resultValue, $this->db);
    }
    public function getLogin(){
        echo $this->templates->render('login');
    }
    public function register(){
        echo $this->templates->render('register');
    }
    public function registerStore()
    {
        $result = $this->validateValue($_POST);
        $this->db->insert('users',['login' => $result['login'], 'password' => password_hash($result['password'], PASSWORD_DEFAULT)]);
        header('Location: /login');
    }
    public function validateValueRegister($password, $password_confirmation, $flag, $data)
    {

        if ($password !== $password_confirmation) {
            $_SESSION['password_confirmation'] = '<small class="text-danger">Пароли не совпадают</small>';
            $flag = 1;
        }
        if ($flag == 1) {
            header('Location: /register');
            die();
        }
        $_SESSION['success'] = 'Регистрация прошла успешно';
        return $data;
    }

    public function validateValue($data)
    {
        $login = $this->clearData($data['login']);
        $password = $this->clearData($data['password']);

        $flag = 0;

        if (mb_strlen($login) > 10 || empty($login)) {
            $_SESSION['login'] = '<small class="text-danger">Логин дролжен быть не менее 10 символов</small>';
            $flag = 1;
        }
        if (strlen($password) < 6 || empty($password)) {
            $_SESSION['password'] = '<small class="text-danger">Пароль должен содержать не менее 6 символов</small>';
            $flag = 1;
        }
        if (array_key_exists('password_confirmation', $data)) {
            $password_confirmation = $this->clearData($data['password_confirmation']);
            return $this->validateValueRegister($password, $password_confirmation, $flag, $data);
        }
        if ($flag == 1) {
            header('Location: /login');
            die();
        }
        return $data;
    }
    public function check($data, $db)
    {
        $users = $db->select('users');
        foreach ($users as $user) {
            if ($user['login'] == $data['login'] && password_verify($data['password'], $user['password'])) {
                SessionController::set('user', $user['login']);
                header('Location: /index');
                die;
            }
        }
        SessionController::set('login', 'Неправильный логин или пароль');
        header('Location: /login');
        die;
    }
    private function clearData($val)
    {
        $val = trim($val);
        $val = stripslashes($val);
        $val = strip_tags($val);
        $val = htmlspecialchars($val);
        return $val;
    }
}