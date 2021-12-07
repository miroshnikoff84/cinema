<?php
include "../../app/controllers/admin-users.php";
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
                <div class="row">
                    <h2 class="col">EDIT-USERS</h2>
                </div>
                <div class="add-post-film col-12">
                    <form action="edit.php" method="post">
                        <input value="<?=$id?>" name="id" type="hidden" >
                        <div class="row input-group mb-3 g-3">
                            <div class="col input-group">
                                <label class="input-group-text" for="login">Логин</label>
                                <input value="<?=$user->username?>" name="username" type="text" class="form-control" aria-label="Логин" id="login">
                            </div>
                            <div class="col input-group">
                                <label class="input-group-text" for="email">Email</label>
                                <input value="<?=$user->email?>" name="email" type="email" class="form-control"  autocomplete="off" id="email">
                            </div>
                            <div class="col input-group">
                                <label class="input-group-text" for="password">Пароль</label>
                                <input value="<?=$user->pass?>" name="password" type="password" class="form-control"  autocomplete="off" id="password">
                            </div>
                        </div>
                        <div class="row input-group mb-3 g-3">
                            <div class="col input-group">
                                <label class="input-group-text" for="name">Имя</label>
                                <input value="<?=$user->firstName?>" name="first_name" type="text" class="form-control" id="name">
                            </div>
                            <div class="col input-group">
                                <label class="input-group-text" for="second-name">Отчество</label>
                                <input value="<?=$user->secondName?>" name="second_name" type="text" class="form-control" id="second-name">
                            </div>
                            <div class="col input-group">
                                <label class="input-group-text" for="last-name">Фамилия</label>
                                <input value="<?=$user->lastName?>" name="last_name" type="text" class="form-control" id="last-name">
                            </div>
                        </div>
                        <div class="row  input-group mb-3 g-3">
                            <div class="col input-group">
                                <label class="input-group-text" for="input-date">Дата рождения</label>
                                <input value="<?=$user->birthday?>" name="birthday" type="date" class="form-control" id="input-date">
                            </div>
                            <div class="col input-group">
                                <label class="input-group-text" for="input-tel">Телефон</label>
                                <input value="<?=$user->phone?>" name="phone" type="tel" class="form-control" id="input-tel" placeholder="+7(___)___-__-__">
                            </div>
                            <div class="col input-group">
                                <label class="input-group-text" for="input-date">Аккаунт создан</label>
                                <input value="<?=$user->create?>" name="create" type="date" class="form-control" id="input-date">
                            </div>
                        </div>
                        <select name="admin" class="w-25 form-select mb-3">
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                        </select>

                        <div class="col mb-3">
                            <button name="edit-user" class="btn btn-primary" type="submit">Сохранить</button>
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
