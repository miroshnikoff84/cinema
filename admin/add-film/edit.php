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
    <link rel="stylesheet" href="../../assets/css/bootstrap-timepicker.css">
    <title>ADMIN-USERS</title>
</head>

<body>

<?php include '../../app/include/header.php'; ?>
<div class="page">
    <div class="container">
        <div class="row page-wrap">
            <?php include '../../app/include/admin-sidebar.php'; ?>
            <div class="col-12 col-lg-10">
                <div class="row ">
                    <h2 class="col">EDIT-FILM</h2>
                    <div class="col"><?php include '../../app/include/admin-btn.php'; ?></div>
                </div>
                <div class="add-post-film col-12">
                    <div class="mb-3 col-12 col-md-4 error">
                        <?=$errMsg?>
                    </div>
                    <form action="edit.php" method="post" enctype="multipart/form-data">
                        <input value="<?=$id?>" name="id" type="hidden" >

                        <div class="col mb-3">
                            <input value="<?=$film->title?>" name="title" type="text" class="form-control" placeholder="Название" aria-label="Название фильма">
                        </div>
                        <div class="col mb-3">
                            <input value="<?=$film->genre?>" name="genre" type="text" class="form-control" placeholder="Жанр" aria-label="Жанр">
                        </div>
                        <div class="col mb-3">
                            <label class="form-label" for="content"></label>
                            <textarea name="description" class="form-control" id="content" rows="3" placeholder="Описание"><?=$film->description?></textarea>
                        </div>
                        <div class="row input-group mb-3 g-3">
                            <div class="col input-group">
                                <input  value="<?=$film->smallImage?>" name="smallImage" type="file" class="form-control" id="smallImage">
                                <label class="input-group-text" for="smallImage">Upload</label>
                            </div>
                            <div class="col input-group">
                                <input  value="<?=$film->bigImage?>" name="bigImage" type="file" class="form-control" id="bigImage">
                                <label class="input-group-text" for="bigImage">Upload</label>
                            </div>
                        </div>
                        <select  name="age" class="form-select mb-3" aria-label="Default select example">
                            <option selected>Возрастное ограничение</option>
                            <option value="0+">0+</option>
                            <option value="3+">3+</option>
                            <option value="6+">6+</option>
                            <option value="12+">12+</option>
                            <option value="16+">16+</option>
                            <option value="18+">18+</option>
                        </select>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="input-date">Дата выхода</label>
                            <input  value="<?=$film->date?>" name="date" type="date" class="form-control" id="input-date">
                            <label class="input-group-text" for="input-time">Время</label>
                            <input  value="<?=$film->time?>" name="time" type="time" class="form-control" id="input-time">
                        </div>
                        <div class="col mb-3">
                            <input  value="<?=$film->country?>" name="country" type="text" class="form-control" placeholder="Страна" aria-label="Страна">
                        </div>
                        <div class="col mb-3">
                            <button name="edit-film" class="btn btn-primary" type="submit">Сохранить</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery-3.6.0.min.js"></script>
<script src="../../assets/js/slick.min.js"></script>
<script src="../../assets/js/slider.js"></script>
<script src="../../assets/js/bootstrap-timepicker.js"></script>
</body>

</html>
