<?php

include "../../app/database/db.php";
require_once "../../classes/Users.class.php";

$id = '';
$foundUser = '';
$usersOfDataBase = selectAll('users');
$user = new Users();
// SEARCH-USER
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search_user'])) {
    $user = new Users();
    $user->trimInputsUser();
    $searchUser = (array) $user;
    foreach ($searchUser as $key=>$value ){
        if(empty($value)){
            unset($searchUser[$key]);
        }
    }
    if (empty($searchUser)){
        array_push($errMsg, 'Пользователь не найден!');
    }else{
        $foundUser = selectOne('users', $searchUser);
        if(!$foundUser){
            array_push($errMsg, 'Пользователь не найден!');
        }
    }
}


// EDIT-USER
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $user->addUserData();
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit-user'])){
    $user = new Users();
    $user->trimInputsUser();

    if ($user->email === '' || $user->pass === '' || $user->admin === ''){
        array_push($errMsg, 'Не все поля заполнены!');
    }elseif (mb_strlen($user->username, 'UTF8') < 2){
        array_push($errMsg, "В имене должно быть более 2-х символов!");
    }else{
        $pass = password_hash($user->pass, PASSWORD_DEFAULT);
        $users = [
            'admin' => $user->admin,
            'username' => $user->username,
            'email' => $user->email,
            'password' => $user->pass,
            'first_name' => $user->firstName,
            'second_name' => $user->secondName,
            'last_name' => $user->lastName,
            'birthday' => $user->birthday,
            'phone' => $user->phone
        ];
        $id = $_POST['id'];
        $users = update('users', $id, $users);
        header('location: '. '/cinema/admin/users/index.php');
    }
}

// DELETE-USERS
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_user_id'])) {
    $id = $_GET['del_user_id'];

    delete('users', $id);
    header('location: '. '/cinema/admin/users/index.php');
}