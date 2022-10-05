<?php
    include "app/database/db.php";

$sliderCatalog = selectAll('films');
$lkUsers = selectAll('users');
$comingSoon = [];
$alreadyInCinemas = [];

// сортировка фильмов по дате.
foreach ($sliderCatalog as $item){
    if (strtotime($item['date']) > time()){                // для включения сортировки поменять `> 1636492301` на `> time()`
        array_push($comingSoon, $item);
    }elseif (strtotime($item['date']) < time()){           // для включения сортировки поменять `< 1636492301` на `< time()`
        array_push($alreadyInCinemas, $item);
    }
}
// открываем фильм по id на главной и на странице фильмы
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['film_id'])) {
    $id = $_GET['film_id'];
    $films = selectOne('films', ['id' => $id]);
    $id = $films['id'];
    $title = $films['title'];
    $genre = $films['genre'];
    $smallImage = $films['image'];
    $bigImage = $films['big_image'];
    $description = $films['description'];
    $age = $films['age'];
    $date = $films['date'];
    $time = $films['time'];
    $country = $films['country'];

}
