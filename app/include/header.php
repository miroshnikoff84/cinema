<header class="header">
    <div class="container">
        <div class="row">
            <?php if (isset($_SESSION['admin'])): ?>
            <div></div>
            <?php else: ?>
                <a class="header-promo" href="#"><img src="<?php echo BASE_URL . "assets/img/header-promo.jpg"?>" alt="promo"></a>
            <?php endif; ?>
        </div>
        <div class="row header-wrap">
            <div class="col-4 header-left"><a href="<?php echo BASE_URL ?>"><img src="<?php echo BASE_URL . "assets/img/logo.svg"?>" alt="logo" class="icon"></a></div>
            <div class="col-8 header-right">
                <a href="#"><span class="city-label">Санкт-Петербург</span><img src="<?php echo BASE_URL . "assets/img/city.svg"?>" alt="city"
                                                                                class="icon"></a>
                <?php if (isset($_SESSION['id'])): ?>
                    <?php if ($_SESSION['admin']): ?>
                        <a href="<?php echo BASE_URL . "admin/add-film/index.php"?>"><img src="<?php echo BASE_URL . "assets/img/adm.svg"?>" alt="adm" class="icon"></a></a>
                    <?php else: ?>
                        <a href="<?php echo BASE_URL . "account/index.php"?>">
                        <img src="<?php echo BASE_URL . "assets/img/user.svg"?>" alt="user" class="icon">
                        <span class="complete"><?php echo $_SESSION['login']; ?></span>
                        </a>
                    <?php endif; ?>
                    <a href="<?php echo BASE_URL . "logout.php"?>"><img src="<?php echo BASE_URL . "assets/img/exit.svg"?>" alt="" class="icon"></a>

                <?php else: ?>
                    <a href="<?php echo BASE_URL . "log.php"?>">
                     <img src="<?php echo BASE_URL . "assets/img/user.svg"?>" alt="user" class="icon">
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
