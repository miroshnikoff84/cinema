<header class="header">
    <div class="container">
        <div class="row"><a class="header-promo" href="#"><img src="assets/img/header-promo.jpg" alt="promo"></a></div>
        <div class="row header-wrap">
            <div class="col-6 header-left"><a href="<?php echo BASE_URL ?>"><img src="assets/img/logo.svg" alt="" class="icon"></a></div>
            <div class="col-6 header-right">
                <a href="#"><span class="city-label">Санкт-Петербург</span><img src="assets/img/city.svg" alt=""
                                                                                class="icon"></a>
                <?php if (isset($_SESSION['id'])): ?>
                <a href="reg.php">
                    <img src="assets/img/user.svg" alt="" class="icon">
                    <span class="complete"><?php echo $_SESSION['login']; ?></span>
                </a>
                <?php else: ?>
                    <a href="#">
                        <img src="assets/img/user.svg" alt="" class="icon">
                        <span class="city-label">Вход</span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
