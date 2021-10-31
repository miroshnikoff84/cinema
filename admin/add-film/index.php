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
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>ADMIN-FILM</title>
</head>

<body>

<?php include '../../app/include/header.php'; ?>
<div class="page">
    <div class="container">
        <div class="row page-wrap">
            <?php include '../../app/include/admin-sidebar.php'; ?>
            <div class="col-12 col-lg-10">
                <div class="row ">
                    <h2 class="col">ADMIN-FILM</h2>
                    <div class="col"><?php include '../../app/include/admin-btn.php'; ?></div>
                </div>
                <div class="post-film col-12">
                    <div class="row table">
                        <div class="col-1 id">ID</div>
                        <div class="col-1 title">Заголовок</div>
                        <div class="col-1 genre">Жанр</div>
                        <div class="col-1 description">Описание</div>
                        <div class="col-1 image">image</div>
                        <div class="col-1 censor">Возраст</div>
                        <div class="col-1 show-date">Дата выхода</div>
                        <div class="col-1 duration">Время</div>
                        <div class="col-1 country">Страна</div>
                        <div class="col-1">Edit</div>
                        <div class="col-1">Delete</div>
                    </div>
                    <div class="row table">
                        <div class="col-1 id">1</div>
                        <div class="col-1 title">Веном</div>
                        <div class="col-1 genre">боевик</div>
                        <div class="col-1 description">11111</div>
                        <div class="col-1 image">image.jpg</div>
                        <div class="col-1 censor">12+</div>
                        <div class="col-1 show-date">12.08.21</div>
                        <div class="col-1 duration">1:25:00</div>
                        <div class="col-1 country">США</div>
                        <div class="col-1"><a class="green" href="#">Edit</a></div>
                        <div class="col-1"><a class="red" href="#">Delete</a></div>
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