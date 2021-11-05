<?php
// topics
include "../../app/database/db.php";

$errMsg = '';
$id = '';
$title = '';
$genre = '';
$description = '';
$age = '';
$date = '';
$time = '';
$country = '';

$addFilms = selectAll('films');

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


    if ($title === '' || $date === '' || $time === ''){
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
            header('location: '. 'http://localhost/cinema/admin/add-film/index.php');

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

// EDIT-FILM
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $films = selectOne('films', ['id' => $id]);
    $id = $films['id'];
    $title = $films['title'];
    $genre = $films['genre'];;
    $description = $films['description'];
    $age = $films['age'];
    $date = $films['date'];
    $time = $films['time'];
    $country = $films['country'];

}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit-film'])){
    $title = trim($_POST['title']);
    $genre = trim($_POST['genre']);
    $description = trim($_POST['description']);
    $addFile = trim($_POST['add-file']);
    $age = trim($_POST['age']);
    $date = trim($_POST['date']);
    $time = trim($_POST['time']);
    $country = trim($_POST['country']);


    if ($title === '' || $date === '' || $time === ''){
        $errMsg = 'Не все поля заполнены!';
    }elseif (mb_strlen($title, 'UTF8') < 2){
        $errMsg = "В названии должно быть более 2-х символов!";
    }else{
            $films = [
                'title' => $title,
                'genre' => $genre,
                'description' => $description,
                'image' => $addFile,
                'age' => $age,
                'date' => $date,
                'time' => $time,
                'country' => $country
            ];
            $id = $_POST['id'];
            $films = update('films', $id, $films);
            header('location: '. 'http://localhost/cinema/admin/add-film/index.php');
    }
}

// DELETE-FILM
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])) {
    $id = $_GET['del_id'];

    delete('films', $id);
    header('location: '. 'http://localhost/cinema/admin/add-film/index.php');
}