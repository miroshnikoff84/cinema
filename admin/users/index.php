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
                    <div class="col"><?php include '../../app/include/admin-btn.php'; ?></div>
                </div>
                <div class="post-film col-12">
                    <div class="row table">
                        <div class="col-1 id-admin">
                            <div class="col-6 id">ID</div>
                            <div class="col-6 admin">Статус</div>
                        </div>
                        <div class="col-1 login">Логин</div>
                        <div class="col-2 email">Email</div>
                        <div class="col-1 password">Пароль</div>
                        <div class="col-1 first-name">Имя</div>
                        <div class="col-1 second-name">Отчество</div>
                        <div class="col-1 last-name">Фамилия</div>
                        <div class="col-1 date-of-birth">Дата рождения</div>
                        <div class="col-1 phone">Телефон</div>
                        <div class="col-1 id-admin">
                            <div class="col-6 id">Edit</div>
                            <div class="col-6 admin">Delete</div>
                        </div>
                    </div>
                    <div class="row table">
                        <div class="col-1 id-admin">
                            <div class="col-6 id">1</div>
                            <div class="col-6 admin">1</div>
                        </div>
                        <div class="col-1 login">miroshnikoff84</div>
                        <div class="col-2 email">miroshnikoff@gmail.com</div>
                        <div class="col-1 password overflow-hidden">gfdhdkJfhsfhsghgdjhhdgjhgfjfghjf{</div>
                        <div class="col-1 first-name">Анатолий</div>
                        <div class="col-1 second-name">Александрович</div>
                        <div class="col-1 last-name">Мирошников</div>
                        <div class="col-1 date-of-birth">19.11.1984</div>
                        <div class="col-1 phone">+79311234567</div>
                        <div class="col-1 id-admin">
                            <div class="col-6"><a href="#" class="green">Edit</a></div>
                            <div class="col-6"><a href="#" class="red">Delete</a></div>
                        </div>
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