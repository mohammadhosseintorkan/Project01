<header class='container-fluid'>

    <section class='row'>
        <section class='col-2' id="logo">
            <img src='<?php echo assets('images/logo.png'); ?>' class="img-fluid">
        </section>
        <section class='col align-self-center'>
            <h1>فروشگاه آفر</h1>
            <p>بهترین‌ فروشگاه پوشاک کشور</p>
        </section>
    </section>

</header>
<nav class='navbar sticky-top navbar-expand-lg navbar-light'>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class='navbar-nav'>
            <li class='nav-item'><a class='nav-link' href="<?php echo SITE_URL; ?>index.php">خانه</a></li>
            <li class='nav-item'><a class='nav-link' href="<?php echo SITE_URL; ?>catalog.php">فروشگاه</a></li>
            <li class='nav-item'><a class='nav-link' href="<?php echo SITE_URL; ?>blog.php">وبلاگ</a></li>
            <li class='nav-item'><a class='nav-link' href="<?php echo SITE_URL; ?>contact.php">تماس با ما</a></li>
        </ul>
    </div>

            <span class='mx-5'>
                <a href="<?php echo SITE_URL; ?>shoppingCartPage.php" class="btn btn-warning m-1">سبد خرید</a>
            </span>


    <?php
    if (Authentication:: check()) {
        echo <<< EOT
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/poshakoffer/public/assets/images/male-profile.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>
EOT;
        echo $_SESSION['uname'];
        echo <<< EOT
</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        
                        <li><a class="dropdown-item" href="dashboard.php">پنل کاربری</a></li>
                    
                        <li><a class="dropdown-item" href="editUser.php?id=
EOT;
        echo $_SESSION['uid'];
        echo <<< EOT
">پروفایل</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="
EOT;
        SITE_URL;
        if (Authentication:: check())
            echo 'logout.php';
        else
            echo 'login.php';
        echo <<< EOT
">خروج</a></li>
                    </ul>
                </div>
EOT;
    } else
        echo "
                <ul class='navbar-nav'>
                    <li class='nav-item'><a class='nav-link' href='login.php'>ورود / ثبت نام</a></li>
                </ul>"
    ?>

</nav>
