<?php
include("app/database/db.php");

$errMsg = '';
$regComplete = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passS = trim($_POST['pass-second']);
    $passF = trim($_POST['pass-first']);

    if ($login === '' || $email === '' || $passS === '' || $passF === ''){
        $errMsg = 'Не все поля заполнены!';
    }elseif (mb_strlen($login, 'UTF8') < 2){
        $errMsg = "Логин должен быть более 2-х символов!";
    }elseif ($passF !== $passS){
        $errMsg = "Пароли должны совпадать!";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if(!empty($existence['email']) && $existence['email'] === $email){
            $errMsg = "Пользователь " . $email . " уже существует";
        }else{
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];
            header('location: ' . BASE_URL);

//            tt($_SESSION);
//            exit();
//            $regComplete = "Пользователь " . $email . " успешно зарегистрирован";
        }
    }
    }else{
    $login = '';
    $email = '';
    }