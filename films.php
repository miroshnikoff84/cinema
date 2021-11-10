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
    <title>Фильмы</title>
</head>

<body>
<?php include('app/include/header.php'); ?>
<?php include('app/include/mobile-nav.php'); ?>
<div class="page">
    <div class="container">
        <div class="row page-wrap">
            <?php include('app/include/sidebar.php'); ?>
            <div class="col-12 col-lg-10 page-content">
                <h2>Фильмы</h2>
                <div class="tabs">
                    <div class="tabs-wrapper">
                        <div class="tab tab-active">
                            Уже в кино
                        </div>
                        <div class="tab">
                            Скоро
                        </div>
                    </div>
                    <div class="tabs-content">
                        <div class="content content-active">
                            <div class="row">
                                <?php foreach ($alreadyInCinemas as $key => $alreadyFilm): ?>
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2 content-item">
                                    <a href="film.php?id=<?=$alreadyFilm['id']; ?>">
                                        <img src="assets/img/films/small/<?=$alreadyFilm['image']; ?>" alt="slide">
                                    </a>
                                    <div class="censorship"><span><?=$alreadyFilm['age']; ?></span></div>
                                    <div class="wrapper">
                                        <div class="content-item-title"><?=$alreadyFilm['title']; ?></div>
                                        <div class="genre"><?=$alreadyFilm['genre']; ?></div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="content">
                            <div class="row">
                                <?php foreach ($comingSoon as $key => $soonFilm): ?>
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2 content-item">
                                    <a href="film.php?id=<?=$soonFilm['id']; ?>">
                                        <img src="assets/img/films/small/<?=$soonFilm['image']; ?>" alt="slide">
                                    </a>
                                    <div class="censorship"><span><?=$soonFilm['age']; ?></span></div>
                                    <div class="wrapper">
                                        <div class="content-item-title"><?=$soonFilm['title']; ?></div>
                                        <div class="genre"><?=$soonFilm['genre']; ?></div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/slider.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>