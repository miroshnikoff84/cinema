<?php
// topics
include "../../path.php";
include "../../app/database/db.php";
require_once "../../classes/Films.class.php";

$id = '';
$defId = 0;
$filmsOfDataBase = selectAll('films');      // Заполняем главную страницу фильмами из базы данных.
$film = new Films();

function redirect(){
    header('location: '. 'http://localhost/cinema/admin/add-film/index.php');
}                          // Ф-я перенаправления на страницу index.php в админ панели
function uploadImage($var_assoc){
    if(isset($var_assoc)){
        global $errMsg;
        if (!empty($_FILES['smallImage']['name'])){
            $imgName = 'pic-' . time() . '.jpg';
            $fileTmpName = $_FILES['smallImage']['tmp_name'];
            $fileType = $_FILES['smallImage']['type'];
            $destination = ROOT_PATH . "\assets\img\\films\\small\\" . $imgName;

            if (strpos($fileType, 'image') === false){
                array_push($errMsg, "Можно загружать только изображения.");
            }else{
                $result = move_uploaded_file($fileTmpName, $destination);

                if ($result){
                    $_POST['smallImage'] = $imgName;
                }else{
                    array_push($errMsg, "Ошибка загрузки.");

                }

            }

        }else{
            array_push($errMsg, "Ошибка получения изображения.");
        }
        if (!empty($_FILES['bigImage']['name'])){
            $imgName = 'big-pic-' . time() . '.jpg';
            $fileTmpName = $_FILES['bigImage']['tmp_name'];
            $fileType = $_FILES['bigImage']['type'];
            $destination = ROOT_PATH . "\assets\img\\films\\big\\" . $imgName;

            if (strpos($fileType, 'image') === false){
                array_push($errMsg, "Можно загружать только изображения.");
            }else{
                $result = move_uploaded_file($fileTmpName, $destination);

                if ($result){
                    $_POST['bigImage'] = $imgName;
                }else{
                    array_push($errMsg, "Ошибка загрузки.");

                }

            }

        }else{
            array_push($errMsg, "Ошибка получения изображения.");
        }
    }
}                // Ф-я загрузки картинок



// Добавляем фильм
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-film'])){
    $film->trimInputsFilm();

    if ($film->title === '' || empty($_FILES['bigImage']['name']) || empty($_FILES['smallImage']['name'])){
        array_push($errMsg, 'Не все поля заполнены!');
    }elseif (mb_strlen($film->title, 'UTF8') < 1){
        array_push($errMsg, "В названии должно быть более одного символов!");
    }else{
        $existence = selectOne('films', ['title' => $film->title]);
        if(!empty($existence['title']) && $existence['title'] === $film->title){
            array_push($errMsg, "Фильм с таким названием уже существует");
        }else{
            uploadImage($_POST['add-film']);
            $film->trimInputsImage();
            $postFilm = [
                'title' => $film->title,
                'genre' => $film->genre,
                'description' => $film->description,
                'image' => $film->smallImage,
                'big_image' => $film->bigImage,
                'age' => $film->age,
                'date' => $film->date,
                'time' => $film->time,
                'country' => $film->country
            ];
            $id = insert('films', $postFilm);
            $postFilm = selectOne('films', ['id' => $id]);
            redirect();

        }
    }
}

// Редактируем фильм
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $film->addFilmData();
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit-film'])){
    $film = new Films();
    $film->trimInputsFilm();
    if ($film->title === '' || $film->date === '' || $film->time === ''){
        array_push($errMsg, 'Не все поля заполнены!');
    }elseif (mb_strlen($film->title, 'UTF8') < 2){
       array_push( $errMsg, "В названии должно быть более 2-х символов!");
    }else{
        uploadImage($_POST['edit-film']);
        $film->trimInputsImage();
            $films = [
                'title' => $film->title,
                'genre' => $film->genre,
                'description' => $film->description,
                'image' => $film->smallImage,
                'big_image' => $film->bigImage,
                'age' => $film->age,
                'date' => $film->date,
                'time' => $film->time,
                'country' => $film->country
            ];
            $id = $_POST['id'];
            $films = update('films', $id, $films);
            redirect();
    }
}

// Удаляем фильм
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])) {
    $id = $_GET['del_id'];

    delete('films', $id);
    redirect();
}