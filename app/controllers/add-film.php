<?php
// topics
include "../../app/database/db.php";

$errMsg = '';
// Code for add films
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-film'])){

    $title = trim($_POST['title']);
    $genre = trim($_POST['genre']);
    $description = trim($_POST['description']);
    $addFile = trim($_POST['add-file']);
    $age = trim($_POST['age']);
    $date = trim($_POST['date']);
    $time = trim($_POST['time']);
    $country = trim($_POST['country']);


    if ($title === '' || $description === ''){
        $errMsg = 'Не все поля заполнены!';
    }elseif (mb_strlen($title, 'UTF8') < 2){
        $errMsg = "Логин должен быть более 2-х символов!";
    }else{
        $existence = selectOne('films', ['title' => $title]);
        if(!empty($existence['title']) && $existence['title'] === $title){
            $errMsg = "Фильм " . $title . " уже существует";
        }else{
            $postFilm = [
                'title' => $title,
                'genre' => $genre,
                'description' => $description,
                'image' => $addFile,
                'age' => $age,
                'date' => $date,
                'time' => $time,
                'country' => $country
            ];
            $id = insert('films', $postFilm);
            $postFilm = selectOne('films', ['id' => $id]);
            header('location: '. BASE_URL . 'admin/add-film/index.php');

        }
    }
}else{
    $title = '';
    $genre = '';
    $description = '';
    $addFile = '';
    $age = '';
    $date = '';
    $time = '';
    $country = '';
}
