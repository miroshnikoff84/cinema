<?php

class Films
{
    public $id;
    public $title;
    public $description;
    public $genre;
    public $smallImage;
    public $bigImage;
    public $age;
    public $date;
    public $time;
    public $country;

    public function addFilmData(){
        $film = selectOne('films', ['id' => $_GET['id']]);
        $this->id = $film['id'];
        $this->title = $film['title'];
        $this->description = $film['description'];
        $this->genre = $film['genre'];
        $this->smallImage = $film['image'];
        $this->bigImage = $film['big_image'];
        $this->age = $film['age'];
        $this->date = $film['date'];
        $this->time = $film['time'];
        $this->country = $film['country'];
    }
    public function trimInputsFilm(){
        $this->title = trim($_POST['title']);
        $this->genre = trim($_POST['genre']);
        $this->description = trim($_POST['description']);
        $this->age = trim($_POST['age']);
        $this->date = trim($_POST['date']);
        $this->time = trim($_POST['time']);
        $this->country = trim($_POST['country']);
    }
    public function trimInputsImage(){
        $this->smallImage = trim($_POST['smallImage']);
        $this->bigImage = trim($_POST['bigImage']);
    }
//    public function resetFilm()
//    {
//        foreach ($this as &$value) {
//            $value = '';
//        }
//    }
}