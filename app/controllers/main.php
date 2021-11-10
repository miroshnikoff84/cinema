<?php
    include "app/database/db.php";
//if (!$_SESSION){
//    header('location: ' . 'http://localhost/cinema/log.php');
//}
$sliderCatalog = selectAll('films');
$lkUsers = selectAll('users');
$comingSoon = [];
$alreadyInCinemas = [];

// сортировка фильмов по дате.
foreach ($sliderCatalog as $item){
    if (strtotime($item['date']) > 1636492301){                // для включения сортировки поменять `> 1636492301` на `> time()`
        array_push($comingSoon, $item);
    }elseif (strtotime($item['date']) < 1636492301){      // для включения сортировки поменять `< 1636492301` на `< time()`
        array_push($alreadyInCinemas, $item);
    }
}






