<?php
    include "app/controllers/users.php";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slick-slider.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Регистрация</title>
</head>

<body>

<?php include('app/include/header.php'); ?>
<?php include('app/include/mobile-nav.php'); ?>
<div class="container reg_form">
    <form class="row justify-content-md-center" method="post" action="log.php">
        <h2>Авторизация</h2>
        <?php foreach ($errMsg as $item): ?>
            <div class="mb-3 col-12 col-md-4 error">
                <?=$item; ?>
            </div>
        <?php endforeach; ?>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="email" class="form-label">Email</label>
            <input name="email" value="<?=$email?>" type="email" class="form-control" id="email" placeholder="Введите ваш email...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите ваш пароль...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button type="submit" name="button-log" class="btn btn-primary">Войти</button>
            <a class="btn text-white" href="reg.php">Регистрация</a>
        </div>
        <!--  FORM  -->
    </form>
</div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/slider.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>


