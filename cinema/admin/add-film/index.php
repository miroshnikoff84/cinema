<?php
include "../../app/controllers/admin-film.php";
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
                    <div class="col"><?php include '../../app/include/admin-btn-add.php'; ?></div>
                </div>
                <div class="post-film col-12">
                    <div class="row table">
                        <div class="col id">ID</div>
                        <div class="col title">Заголовок</div>
                        <div class="col edit">Edit</div>
                        <div class="col delete">Delete</div>
                        <div class="col genre">Жанр</div>
                        <div class="col description">Описание</div>
                        <div class="col image">image</div>
                        <div class="col big-image">big-image</div>
                        <div class="col censor">Возраст</div>
                        <div class="col show-date">Дата выхода</div>
                        <div class="col duration">Время</div>
                        <div class="col country">Страна</div>
                    </div>
                    <?php foreach ($filmsOfDataBase as $key => $film): ?>
                        <div class="row table">
                        <div class="col id"><?=$film['id']; ?></div>
                        <div class="col title overflow-hidden"><?=$film['title']; ?></div>
                        <div class="col edit"><a class="green" href="edit.php?id=<?=$film['id']; ?>">Edit</a></div>
                        <div class="col delete"><a class="red" href="edit.php?del_id=<?=$film['id']; ?>">Delete</a></div>
                        <div class="col genre overflow-hidden"><?=$film['genre']; ?></div>
                        <div class="col description overflow-hidden"><?=$film['description']; ?></div>
                        <div class="col image overflow-hidden"><?=$film['image']; ?></div>
                        <div class="col big-image overflow-hidden"><?=$film['big_image']; ?></div>
                        <div class="col censor"><?=$film['age']; ?></div>
                        <div class="col show-date"><?=$film['date']; ?></div>
                        <div class="col duration"><?=$film['time']; ?></div>
                        <div class="col country"><?=$film['country']; ?></div>
                    </div>
                    <?php endforeach; ?>

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