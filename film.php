<?php
include "app/controllers/main.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slick-slider.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>CINEMA CLUB</title>
</head>

<body>
<?php include 'app/include/header.php'; ?>
<?php include 'app/include/mobile-nav.php'; ?>
<div class="page">
    <div class="container">
        <div class="row page-wrap">
            <?php include 'app/include/sidebar.php'; ?>
            <div class="col-12 col-lg-10 page-content">
               <div class="film-board">
                   <img class="image-board" src="assets/img/films/big/big-pic-1636320568.jpg" alt="film">
                   <div class="film-card">
                            <h2 class="card-title">Вечные</h2>
                            <div class="card-genre genre">экшн</div>
                            <div class="card-country text-white mb-3">США</div>
                            <div class="card-item mb-3">
                                <div class="card-date">C 08 Ноября</div>
                                <div class="card-age">18+</div>
                                <div class="card-time text-white">02:44</div>
                            </div>
                            <div class="card-ref">
                                <a href="#" class="card-icon">
                                       <img class="icon" src="assets/img/svg/about.svg" alt="about">
                                       <span>О фильме</span>
                                </a>
                                <a href="#" class="card-icon">
                                       <img class="icon" src="assets/img/svg/video.svg" alt="trailer">
                                       <span>Трейлер</span>
                                </a>
                            </div>

                       </div>
                   </div>
                <div class="filter text-white">Фильтровать</div>
            </div>

            </div>
        </div>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/slider.js"></script>
</body>

</html>