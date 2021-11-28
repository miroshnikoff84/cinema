<?php

class Users
{
    public $id;
    public $admin;
    public $username;
    public $email;
    public $pass;
    public $firstName;
    public $secondName;
    public $lastName;
    public $birthday;
    public $phone;
    public $created;

    public function addUserData(){
        $user = selectOne('users', ['id' => $_GET['id']]);
        $this->id = $user['id'];
        $this->admin = $user['admin'];
        $this->username = $user['username'];
        $this->email = $user['email'];
        $this->pass = $user['password'];
        $this->firstName = $user['first_name'];
        $this->secondName = $user['second_name'];
        $this->lastName = $user['last_name'];
        $this->birthday = $user['birthday'];
        $this->phone = $user['phone'];
    }
    public function trimInputsUser(){
        if (isset($_POST['admin'])){
            $this->admin = trim($_POST['admin']);
        }
        $this->username = trim($_POST['username']);
        $this->email = trim($_POST['email']);
        if (isset($_POST['password'])){
            $this->pass = trim($_POST['password']);
        }
        $this->firstName = trim($_POST['first_name']);
        $this->secondName = trim($_POST['second_name']);
        $this->lastName = trim($_POST['last_name']);
        $this->birthday = trim($_POST['birthday']);
        $this->phone = trim($_POST['phone']);
        if(isset($_POST['created'])){
            $this->created = trim($_POST['created']);
        }
    }

}
