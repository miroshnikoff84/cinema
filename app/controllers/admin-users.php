<?php

include "../../app/database/db.php";

$errMsg = '';
$id = '';
$admin = '';
$username = '';
$email = '';
$pass = '';
$firstName = '';
$secondName = '';
$lastName = '';
$birthday = '';
$phone = '';

$addUsers = selectAll('users');


// EDIT-USER
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $users = selectOne('users', ['id' => $id]);
    $id = $users['id'];
    $admin = $users['admin'];
    $username = $users['username'];;
    $email = $users['email'];
    $pass = $users['password'];
    $firstName = $users['first_name'];
    $secondName = $users['second_name'];
    $lastName = $users['last_name'];
    $birthday = $users['birthday'];
    $phone = $users['phone'];

}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit-user'])){
    $admin = trim($_POST['admin']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    $firstName = trim($_POST['firstName']);
    $secondName = trim($_POST['secondName']);
    $lastName = trim($_POST['lastName']);
    $birthday = trim($_POST['birthday']);
    $phone = trim($_POST['phone']);

    if ($email === '' || $pass === '' || $admin === ''){
        $errMsg = 'Не все поля заполнены!';
    }elseif (mb_strlen($username, 'UTF8') < 2){
        $errMsg = "В имене должно быть более 2-х символов!";
    }else{
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $users = [
            'admin' => $admin,
            'username' => $username,
            'email' => $email,
            'password' => $pass,
            'first_name' => $firstName,
            'second_name' => $secondName,
            'last_name' => $lastName,
            'birthday' => $birthday,
            'phone' => $phone
        ];
        $id = $_POST['id'];
        $users = update('users', $id, $users);
        header('location: '. 'http://localhost/cinema/admin/users/index.php');
    }
}

// DELETE-USERS
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_user_id'])) {
    $id = $_GET['del_user_id'];

    delete('users', $id);
    header('location: '. 'http://localhost/cinema/admin/users/index.php');
}