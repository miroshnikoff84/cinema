<?php

class Theatres
{
    public $id;
    public $title;
    public $adds;
    public $metro;
    public $numberOfHalls;
    public $numberOfSeats;
    public $operatingMode;
    public $description;

//    public function addUserData(){
//        $user = selectOne('users', ['id' => $_GET['id']]);
//        $this->id = $user['id'];
//        $this->admin = $user['admin'];
//        $this->username = $user['username'];
//        $this->email = $user['email'];
//        $this->pass = $user['password'];
//        $this->firstName = $user['first_name'];
//        $this->secondName = $user['second_name'];
//        $this->lastName = $user['last_name'];
//        $this->birthday = $user['birthday'];
//        $this->phone = $user['phone'];
//    }
    public function trimInputsTheatres(){
        $this->title = trim($_POST['title']);
        $this->adds = trim($_POST['adds']);
        $this->metro = trim($_POST['metro']);
        $this->numberOfHalls = trim($_POST['number_of_halls']);
        $this->numberOfSeats = trim($_POST['number_of_seats']);
        $this->operatingMode = trim($_POST['operating_mode']);
        $this->description = trim($_POST['description']);
    }

}
