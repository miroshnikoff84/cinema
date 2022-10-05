<?php

$driver = 'mysql';
$host = '136.243.14.123';
$db_name = 'miros953_cinema';
$db_user = 'miros953_cinema';
$db_pass = 'Tolyannjkzy1';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try{
    $pdo = new PDO(
        "$driver:host=$host;dbname=$db_name;charset=$charset",
        $db_user, $db_pass, $options
    );
}catch (PDOException $i){
    die("Ошибка подключения к базе");
}