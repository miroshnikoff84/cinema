<?php

    include "app/controllers/main.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/slick-slider.css">
    <link rel="stylesheet" href="../assets/css/style.css">
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
                    <div class="catalog-block">
                            <a href="#"><h2>Уже в кино</h2></a>
                        <div class="slider slider-catalog">
                            <?php foreach ($alreadyInCinemas as $key => $alreadyFilm): ?>
                            <div class="slider__item">
                                <a href="../film.php?film_id=<?=$alreadyFilm['id']; ?>"><img src="assets/img/films/small/<?=$alreadyFilm['image']; ?>" alt="slide"></a>
                                <div class="censorship"><span><?=$alreadyFilm['age']; ?></span></div>
                                <div class="wrapper">
                                    <div class="content-item-title"><?=$alreadyFilm['title']; ?></div>
                                    <div class="genre"><?=$alreadyFilm['genre']; ?></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- catalog-block -->
                    </div>
                    <div class="stock-block">
                            <a href="#"><h2>Акции</h2></a>
                        <div class="slider slider-stock">
                            <div class="slider__item">
                                <a href="#"><img src="../assets/img/stock-1.jpg" alt="slide"></a>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="../assets/img/stock-2.jpg" alt="slide"></a>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="../assets/img/stock-3.jpg" alt="slide"></a>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="../assets/img/stock-4.jpg" alt="slide"></a>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="../assets/img/stock-5.jpg" alt="slide"></a>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="../assets/img/stock-6.jpg" alt="slide"></a>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="../assets/img/stock-7.jpg" alt="slide"></a>
                            </div>
                        </div>
                        <!-- slider-catalog -->
                    </div>
                    <div class="preview-block">
                            <a href="#"><h2>Скоро в кино</h2></a>
                        <div class="slider slider-preview">
                            <?php foreach ($comingSoon as $key => $soonFilm): ?>
                            <div class="slider__item">
                                <a href="../film.php?film_id=<?=$soonFilm['id']; ?>"><img src="assets/img/films/big/<?=$soonFilm['big_image']; ?>" alt="slide"></a>

                                <div class="censorship"><span><?=$soonFilm['age']; ?></span></div>
                                <div class="wrapper">
                                    <div class="content-item-title"><?=$soonFilm['title']; ?></div>
                                    <div class="genre"><?=$soonFilm['genre']; ?></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- slider-catalog -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/slider.js"></script>
</body>

</html>