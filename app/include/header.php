<header class="header">
    <div class="container">
        <div class="row">
                <a class="header-promo" href="#"><img src="http://localhost/cinema/assets/img/header-promo.jpg" alt="promo"></a>
        </div>
        <div class="row header-wrap">
            <div class="col-4 header-left"><a href="http://localhost/cinema/index.php"><img src="http://localhost/cinema/assets/img/logo.svg" alt="logo" class="icon"></a></div>
            <div class="col-8 header-right">
                <a href="#"><span class="city-label">Санкт-Петербург</span><img src="http://localhost/cinema/assets/img/city.svg" alt="city"
                                                                                class="icon"></a>
                <?php if (isset($_SESSION['id'])): ?>
                    <?php if ($_SESSION['admin']): ?>
                        <a href="http://localhost/cinema/admin/add-film/index.php"><img src="http://localhost/cinema/assets/img/adm.svg" alt="adm" class="icon"></a></a>
                    <?php else: ?>
                        <a href="http://localhost/cinema/account/index.php">
                        <img src="http://localhost/cinema/assets/img/user-green.svg>" alt="user" class="icon">
                        <span class="complete"><?php echo $_SESSION['login']; ?></span>
                        </a>
                    <?php endif; ?>
                    <a href="http://localhost/cinema/logout.php"><img src="http://localhost/cinema/assets/img/exit.svg" alt="Exit" class="icon"></a>

                <?php else: ?>
                    <a href="http://localhost/cinema/log.php">
                     <img src="http://localhost/cinema/assets/img/user.svg" alt="user" class="icon">
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
