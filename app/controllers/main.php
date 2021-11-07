<?php
    include "app/database/db.php";
//if (!$_SESSION){
//    header('location: ' . 'http://localhost/cinema/log.php');
//}
$sliderCatalog = selectAll('films');
$lkUsers = selectAll('users');






