<header class="header">
    <div class="container">
        <div class="row">
                <a class="header-promo" href="#"><img src="/cinema/assets/img/header-promo.jpg" alt="promo"></a>
        </div>
        <div class="row header-wrap">
            <div class="col-4 header-left"><a href="/cinema/index.php"><img src="/cinema/assets/img/svg/logo.svg" alt="logo" class="icon"></a></div>
            <div class="col-8 header-right">
                <a href="#"><span class="city-label">Санкт-Петербург</span><img src="/cinema/assets/img/svg/city.svg" alt="city"
                                                                                class="icon"></a>
                <?php if (isset($_SESSION['id'])): ?>
                    <?php if ($_SESSION['admin']): ?>
                        <a href="admin/add-film/index.php"><img src="/cinema/assets/img/svg/adm.svg" alt="adm" class="icon"></a></a>
                    <?php else: ?>
                        <a href="/cinema/account/index.php?id=<?=$_SESSION['id']; ?>">
                        <img src="/cinema/assets/img/svg/user-green.svg" alt="user" class="icon">
                        <span class="complete"><?php echo $_SESSION['login']; ?></span>
                        </a>
                    <?php endif; ?>
                    <a href="/cinema/logout.php"><img src="/cinema/assets/img/svg/exit.svg" alt="Exit" class="icon"></a>

                <?php else: ?>
                    <a href="log.php">
                     <img src="/cinema/assets/img/svg/user.svg" alt="user" class="icon">
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
