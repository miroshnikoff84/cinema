<?php
include "app/database/db.php";


$regComplete = '';

function userAuth($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];

    if($_SESSION['admin']){
        header('location: ' . "/cinema/admin/add-film/index.php");
    }else{
        header('location: ' . "/cinema/index.php");
    }
}
// Registration
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passS = trim($_POST['pass-second']);
    $passF = trim($_POST['pass-first']);
    
    if ($login === '' || $email === '' || $passS === '' || $passF === ''){
        array_push($errMsg, 'Не все поля заполнены!');
    }elseif (mb_strlen($login, 'UTF8') < 2){
        array_push($errMsg, "Логин должен быть более 2-х символов!");
    }elseif ($passF !== $passS){
        array_push($errMsg, "Пароли должны совпадать!");
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if(!empty($existence['email']) && $existence['email'] === $email){
            array_push($errMsg, "Пользователь " . $email . " уже существует");
        }else{
            $pass = crypt($passF);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);

            userAuth($user);
        }
    }
    }else{
    $login = '';
    $email = '';
    }
// Code for authorized
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){

    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    

    if ($email === '' || $pass === ''){
        array_push($errMsg, 'Не все поля заполнены!');
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence && crypt($pass, $existence['password'])){
            userAuth($existence);
        }else{
            array_push($errMsg, 'Почта или пароль введены не верно!');
        }

    }

}else{
    $email = '';
}
