<?php
include "../app/controllers/set-account.php";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/slick-slider.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-timepicker.css">
    <title>Личный кабинет</title>
</head>

<body>

<?php include '../app/include/header.php'; ?>
<div class="page">
    <div class="container">
        <div class="row page-wrap">
            <?php include '../app/include/user-account-sidebar.php'; ?>
            <div class="col-12 col-lg-10">
                <div class="row">
                    <h2 class="col">Личный кабинет</h2>
                </div>
                <div class="col-12">
                    <form action="index.php" method="post">
                        <input value="<?=$id?>" name="id" type="hidden" >
                        <div class="row input-group mb-3 g-3">
                            <div class="col input-group">
                                <label class="input-group-text" for="name">Имя</label>
                                <input name="firstName" value="<?=$firstName?>" type="text" class="form-control" autocomplete="off" id="name">
                            </div>
                            <div class="col input-group">
                                <label class="input-group-text" for="last-name">Фамилия</label>
                                <input name="lastName" value="<?=$lastName?>" type="text" class="form-control" id="last-name">
                            </div>
                            <div class="col input-group">
                                <label class="input-group-text" for="second-name">Отчество</label>
                                <input name="secondName" value="<?=$secondName?>" type="text" class="form-control" id="second-name">
                            </div>

                        </div>

                        <div class="row  input-group mb-3 g-3">
                            <div class="col input-group">
                                <label class="input-group-text" for="input-tel">Телефон</label>
                                <input value="<?=$phone?>" name="phone" type="tel" class="form-control" id="input-tel" placeholder="+7(___)___-__-__">
                            </div>
                            <div class="col input-group">
                                <label class="input-group-text" for="input-date">Дата рождения</label>
                                <input value="<?=$birthday?>" name="birthday" type="date" class="form-control" id="input-date">
                            </div>
                        </div>
                        <div class="row  input-group mb-3 g-3">
                            <div class="col input-group">
                                <button name="edit-account" class="btn btn-info" type="submit">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/jquery-3.6.0.min.js"></script>
<script src="../assets/js/slick.min.js"></script>
<script src="../assets/js/slider.js"></script>
<script src="../assets/js/bootstrap-timepicker.js"></script>
</body>

</html>
