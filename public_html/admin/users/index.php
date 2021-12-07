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
                <form action="../../app/index.php" method="post">
                    <div class="row input-group mb-3 g-3">
                        <div class="col input-group">
                            <label class="input-group-text" for="login">Логин</label>
                            <input name="username" type="text" class="form-control" id="login">
                        </div>
                        <div class="col input-group">
                            <label class="input-group-text" for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email">
                        </div>
                        <div class="col input-group">
                            <label class="input-group-text" for="input-date">Дата рождения</label>
                            <input name="birthday" type="date" class="form-control" id="input-date">
                        </div>
                    </div>
                    <div class="row input-group mb-3 g-3">
                        <div class="col input-group">
                            <label class="input-group-text" for="name">Имя</label>
                            <input name="first_name" type="text" class="form-control" id="name">
                        </div>
                        <div class="col input-group">
                            <label class="input-group-text" for="second-name">Отчество</label>
                            <input name="second_name" type="text" class="form-control" id="second-name">
                        </div>
                        <div class="col input-group">
                            <label class="input-group-text" for="last-name">Фамилия</label>
                            <input name="last_name" type="text" class="form-control" id="last-name">
                        </div>
                    </div>
                    <div class="row  input-group mb-3 g-3">

                        <div class="col input-group">
                            <label class="input-group-text" for="input-tel">Телефон</label>
                            <input name="phone" type="tel" class="form-control" id="input-tel" placeholder="+7(___)___-__-__">
                        </div>
                        <div class="col input-group">
                            <label class="input-group-text" for="input-date">Аккаунт создан</label>
                            <input name="created" type="date" class="form-control" id="input-date">
                        </div>
                    </div>
                    <button type="submit" name="search_user" class=" mb-3 btn btn-primary">Поиск</button>
                </form>
                <?php if(!empty($foundUser)): ?>
                <div class="post-film col-12">
                    <div class="row table">
                        <div class="col-1 id-admin">
                            <div class="col-6 id">ID</div>
                            <div class="col-6 admin">Статус</div>
                        </div>
                        <div class="col-1">Логин</div>
                        <div class="col-2">Email</div>
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
                    <div class="row table">
                        <div class="col-1 id-admin">
                            <div class="col-6"><?=$foundUser['id']; ?></div>
                            <div class="col-6"><?=$foundUser['admin']; ?></div>
                        </div>
                        <div class="col-1"><?=$foundUser['username']; ?></div>
                        <div class="col-2"><?=$foundUser['email']; ?></div>
                        <div class="col-1"><?=$foundUser['first_name']; ?></div>
                        <div class="col-1"><?=$foundUser['second_name']; ?></div>
                        <div class="col-1"><?=$foundUser['last_name']; ?></div>
                        <div class="col-1"><?=$foundUser['birthday']; ?></div>
                        <div class="col-1"><?=$foundUser['phone']; ?></div>
                        <div class="col-1 id-admin">
                            <div class="col-6"><a href="edit.php?id=<?=$foundUser['id']; ?>" class="green">Edit</a></div>
                            <?php if ($foundUser['admin'] == 0): ?>
                                <div class="col-6"><a href="edit.php?del_user_id=<?=$foundUser['id']; ?>" class="red">Delete</a></div>
                            <?php endif; ?>
                        </div>
                        <?php if ($foundUser['admin'] == 0): ?>
                            <div class="col"><a href="edit.php?id=<?=$foundUser['id']; ?>" class="green">Orders</a></div>
                        <?php endif; ?>

                    </div>
                </div>
                <?php else: ?>
                    <?php foreach ($errMsg as $item): ?>
                        <div class="mt-3 col-12 col-md-4 error">
                            <?=$item; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
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