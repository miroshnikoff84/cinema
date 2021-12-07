<?php
include "../app/database/db.php";

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
$lkUsers = selectAll('users');

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

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit-account'])){
    $firstName = trim($_POST['firstName']);
    $secondName = trim($_POST['secondName']);
    $lastName = trim($_POST['lastName']);
    $birthday = trim($_POST['birthday']);
    $phone = trim($_POST['phone']);

        $users = [
            'first_name' => $firstName,
            'second_name' => $secondName,
            'last_name' => $lastName,
            'birthday' => $birthday,
            'phone' => $phone
        ];
        $id = $_POST['id'];
        $users = update('users', $id, $users);
        header('location: '. 'http://localhost/cinema/account/index.php?id=' . $_SESSION['id']);

}