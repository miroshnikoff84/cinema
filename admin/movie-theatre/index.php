<?php include "../../path.php";
include "../../app/database/db.php";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/slick-slider.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>ADMIN-MOVIE THEATRES</title>
</head>

<body>

<?php include '../../app/include/header.php'; ?>
<?php include '../../app/include/mobile-nav.php'; ?>
<div class="page">
    <div class="container">
        <div class="row page-wrap">
            <?php include '../../app/include/admin-sidebar.php'; ?>
            <div class="col-12 col-lg-10 page-content">
                <h2>ADMIN-MOVIE THEATRES</h2>
                <?php include '../../app/include/admin-btn.php'; ?>
                <div class="posts col-12">
                    <div class="row title-table">
                        <div class="col-1 id">ID</div>
                        <div class="col-1 title">Заголовок</div>
                        <div class="col-1 description">Описание</div>
                        <div class="col-1 genre">жанр</div>
                        <div class="col-1 image">изображение</div>
                        <div class="col-1 censor">цензура</div>
                        <div class="col-1 show-date">начало показа</div>
                        <div class="col-1 duration">продолжительность</div>
                        <div class="col-1 country">страна</div>
                    </div>
                    <div class="row title-table">
                        <div class="id">1</div>
                        <div class="title">Веном</div>
                        <div class="description">еыр,Мбплрлвплоро залпорзвшщп павшорвзщшпо</div>
                        <div class="genre">боевик</div>
                        <div class="image">изображение</div>
                        <div class="censor">цензура</div>
                        <div class="show-date">начало показа</div>
                        <div class="duration">1:25:00</div>
                        <div class="country">Россия</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery-3.6.0.min.js"></script>
<script src="../../assets/js/slick.min.js"></script>
<script src="../../assets/js/slider.js"></script>
</body>

</html>