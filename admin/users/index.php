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
                    <h2 class="col">ADMIN-USERS</h2>
                </div>
                <div class="post-film col-12">
                    <div class="row table">
                        <div class="col-1 id-admin">
                            <div class="col-6 id">ID</div>
                            <div class="col-6 admin">Статус</div>
                        </div>
                        <div class="col-1">Логин</div>
                        <div class="col-2">Email</div>
                        <div class="col-1">Пароль</div>
                        <div class="col-1">Имя</div>
                        <div class="col-1">Отчество</div>
                        <div class="col-1">Фамилия</div>
                        <div class="col-1">Дата рождения</div>
                        <div class="col-1">Телефон</div>
                        <div class="col-1 id-admin">
                            <div class="col-6 id">Edit</div>
                            <div class="col-6 admin">Delete</div>
                        </div>
                    </div>
                    <?php foreach ($addUsers as $key => $addUser): ?>
                    <div class="row table">
                        <div class="col-1 id-admin">
                            <div class="col-6"><?=$key + 1; ?></div>
                            <div class="col-6"><?=$addUser['admin']; ?></div>
                        </div>
                        <div class="col-1"><?=$addUser['username']; ?></div>
                        <div class="col-2"><?=$addUser['email']; ?></div>
                        <div class="col-1 password overflow-hidden"><?=$addUser['password']; ?></div>
                        <div class="col-1"><?=$addUser['first_name']; ?></div>
                        <div class="col-1"><?=$addUser['second_name']; ?></div>
                        <div class="col-1"><?=$addUser['last_name']; ?></div>
                        <div class="col-1"><?=$addUser['birthday']; ?></div>
                        <div class="col-1"><?=$addUser['phone']; ?></div>
                        <div class="col-1 id-admin">
                            <div class="col-6"><a href="edit.php?id=<?=$addUser['id']; ?>" class="green">Edit</a></div>
                            <?php if ($addUser['admin'] == 0): ?>
                            <div class="col-6"><a href="edit.php?del_user_id=<?=$addUser['id']; ?>" class="red">Delete</a></div>
                            <?php endif; ?>
                        </div>
                        <?php if ($addUser['admin'] == 0): ?>
                            <div class="col"><a href="edit.php?id=<?=$addUser['id']; ?>" class="green">Orders</a></div>
                        <?php endif; ?>

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