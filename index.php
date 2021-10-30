<?php include "path.php";
        include "app/database/db.php";
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
                    <div class="catalog-block">
                            <a href="films.php"><h2>Уже в кино</h2></a>
                        <div class="slider slider-catalog">
                            <div class="slider__item filter">
                                <a href="#"><img src="assets/img/slide-1.jpg" alt="slide"></a>
                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Не время убивать</div>
                                    <div class="genre">боевик</div>
                                </div>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/slide-2.jpg" alt="slide"></a>
                                <div class="censorship"><span>6+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Босс молокосос 2</div>
                                    <div class="genre">мультфильм</div>
                                </div>
                            </div>
                            <div class="slider__item filter">
                                <a href="#"><img src="assets/img/slide-3.jpg" alt="slide"></a>
                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Шан-чи: Легенда десяти колец</div>
                                    <div class="genre">боевик</div>
                                </div>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/slide-4.jpg" alt="slide"></a>
                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Дюна</div>
                                    <div class="genre">фантастика</div>
                                </div>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/slide-5.jpg" alt="slide"></a>
                                <div class="censorship"><span>16+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Веном 2</div>
                                    <div class="genre">боевик</div>
                                </div>
                            </div>
                            <div class="slider__item filter">
                                <a href="#"><img src="assets/img/slide-6.jpg" alt="slide"></a>
                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Семейка Адамс: Горящий тур</div>
                                    <div class="genre">мультфильм</div>
                                </div>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/slide-7.jpg" alt="slide"></a>
                                <div class="censorship"><span>0+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Мой маленький пони</div>
                                    <div class="genre">мультфильм</div>
                                </div>
                            </div>
                        </div>
                        <!-- catalog-block -->
                    </div>
                    <div class="stock-block">
                            <a href="#"><h2>Акции</h2></a>
                        <div class="slider slider-stock">
                            <div class="slider__item filter">
                                <a href="#"><img src="assets/img/stock-1.jpg" alt="slide"></a>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/stock-2.jpg" alt="slide"></a>
                            </div>
                            <div class="slider__item filter">
                                <a href="#"><img src="assets/img/stock-3.jpg" alt="slide"></a>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/stock-4.jpg" alt="slide"></a>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/stock-5.jpg" alt="slide"></a>
                            </div>
                            <div class="slider__item filter">
                                <a href="#"><img src="assets/img/stock-6.jpg" alt="slide"></a>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/stock-7.jpg" alt="slide"></a>
                            </div>
                        </div>
                        <!-- slider-catalog -->
                    </div>
                    <div class="preview-block">
                            <a href="films.php"><h2>Скоро в кино</h2></a>
                        <div class="slider slider-preview">
                            <div class="slider__item filter">
                                <a href="#"><img src="assets/img/preview-1.jpg" alt="slide"></a>

                                <div class="censorship"><span>0+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Демоник</div>
                                    <div class="genre">Ужасы</div>
                                </div>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/preview-2.jpg" alt="slide"></a>

                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Человек божий</div>
                                    <div class="genre">биография</div>
                                </div>
                            </div>
                            <div class="slider__item filter">
                                <a href="#"><img src="assets/img/preview-3.jpg" alt="slide"></a>

                                <div class="censorship"><span>16+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Королевская игра</div>
                                    <div class="genre">драма</div>
                                </div>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/preview-4.jpg" alt="slide"></a>

                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Веном</div>
                                    <div class="genre">боевик</div>
                                </div>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/preview-5.jpg" alt="slide"></a>

                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Веном</div>
                                    <div class="genre">боевик</div>
                                </div>
                            </div>
                            <div class="slider__item filter">
                                <a href="#"><img src="assets/img/preview-6.jpg" alt="slide"></a>

                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Веном</div>
                                    <div class="genre">боевик</div>
                                </div>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/preview-7.jpg" alt="slide"></a>

                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Веном</div>
                                    <div class="genre">боевик</div>
                                </div>
                            </div>
                            <div class="slider__item filter">
                                <a href="#"><img src="assets/img/preview-8.jpg" alt="slide"></a>

                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Веном</div>
                                    <div class="genre">боевик</div>
                                </div>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/preview-9.jpg" alt="slide"></a>

                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Веном</div>
                                    <div class="genre">боевик</div>
                                </div>
                            </div>
                            <div class="slider__item filter">
                                <a href="#"><img src="assets/img/preview-10.jpg" alt="slide"></a>
                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Веном</div>
                                    <div class="genre">боевик</div>
                                </div>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/preview-11.jpg" alt="slide"></a>
                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Веном</div>
                                    <div class="genre">боевик</div>
                                </div>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/preview-12.jpg" alt="slide"></a>
                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Веном</div>
                                    <div class="genre">боевик</div>
                                </div>
                            </div>
                            <div class="slider__item filter">
                                <a href="#"><img src="assets/img/preview-13.jpg" alt="slide"></a>
                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Веном</div>
                                    <div class="genre">боевик</div>
                                </div>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/preview-14.jpg" alt="slide"></a>
                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Веном</div>
                                    <div class="genre">боевик</div>
                                </div>
                            </div>
                            <div class="slider__item">
                                <a href="#"><img src="assets/img/preview-15.jpg" alt="slide"></a>
                                <div class="censorship"><span>12+</span></div>
                                <div class="wrapper">
                                    <div class="content-item-title">Веном</div>
                                    <div class="genre">боевик</div>
                                </div>
                            </div>
                        </div>
                        <!-- slider-catalog -->
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