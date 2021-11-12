<?php
// topics
include "../../path.php";
include "../../app/database/db.php";



$errMsg = '';
$id = '';
$title = '';
$genre = '';
$description = '';
$age = '';
$smallImage = '';
$bigImage = '';
$date = '';
$time = '';
$country = '';
$defId = 0;

$addFilms = selectAll('films');

function uploadImage($var_assoc){
    if(isset($var_assoc)){
        if (!empty($_FILES['smallImage']['name'])){
            $imgName = 'pic-' . time() . '.jpg';
            $fileTmpName = $_FILES['smallImage']['tmp_name'];
            $fileType = $_FILES['smallImage']['type'];
            $destination = ROOT_PATH . "\assets\img\\films\\small\\" . $imgName;

            if (strpos($fileType, 'image') === false){
                die("Можно загружать только изображения.");
            }else{
                $result = move_uploaded_file($fileTmpName, $destination);

                if ($result){
                    $_POST['smallImage'] = $imgName;
                }else{
                    echo 'Ошибка загрузки';
                }

            }

        }else{
            echo 'Ошибка получения изображения';
        }
        if (!empty($_FILES['bigImage']['name'])){
            $imgName = 'big-pic-' . time() . '.jpg';
            $fileTmpName = $_FILES['bigImage']['tmp_name'];
            $fileType = $_FILES['bigImage']['type'];
            $destination = ROOT_PATH . "\assets\img\\films\\big\\" . $imgName;

            if (strpos($fileType, 'image') === false){
                die("Можно загружать только изображения.");
            }else{
                $result = move_uploaded_file($fileTmpName, $destination);

                if ($result){
                    $_POST['bigImage'] = $imgName;
                }else{
                    echo 'Ошибка загрузки';
                }

            }

        }else{
            echo 'Ошибка получения изображения';
        }
    }
}

// Code for add films
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-film'])){

    $title = trim($_POST['title']);
    $genre = trim($_POST['genre']);
    $description = trim($_POST['description']);
    $age = trim($_POST['age']);
    $date = trim($_POST['date']);
    $time = trim($_POST['time']);
    $country = trim($_POST['country']);

    if ($title === '' || empty($_FILES['bigImage']['name']) || empty($_FILES['smallImage']['name'])){
        $errMsg = 'Не все поля заполнены!';
    }elseif (mb_strlen($title, 'UTF8') < 1){
        $errMsg = "В названии должно быть более одного символов!";
    }else{
        $existence = selectOne('films', ['title' => $title]);
        if(!empty($existence['title']) && $existence['title'] === $title){
            $errMsg = "Фильм " . $title . " уже существует";
        }else{
            uploadImage($_POST['add-film']);
            $smallImage = trim($_POST['smallImage']);
            $bigImage = trim($_POST['bigImage']);
            $postFilm = [
                'title' => $title,
                'genre' => $genre,
                'description' => $description,
                'image' => $smallImage,
                'big_image' => $bigImage,
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
    $smallImage = '';
    $bigImage = '';
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
    $genre = $films['genre'];
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
    $smallImage = trim($_POST['smallImage']);
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
                'image' => $smallImage,
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