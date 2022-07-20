<aside class="position-relative col-12 col-lg-2 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">

    <a href="<?php echo SITE_URL; ?>index.php"
       class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <!-- svg class="bi me-2" width="40" height="32"><use xlink:href="bootstrap-icons.svg#bootstrap"></use></svg -->
        <i class="bi me-2 bi-shop"></i>
        <span class="fs-4">فروشگاه آفر</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">

        <li class="nav-item">
            <a href="<?php echo SITE_URL; ?>dashboard.php" class="nav-link active" aria-current="page">
                <i class="bi me-2 bi-speedometer2"></i>
                داشبورد
            </a>
        </li>


        <li class="nav-item">
            <a href="#" class="nav-link text-white" data-bs-toggle="collapse" data-bs-target="#shop-collapse"
               aria-expanded="false">
                <i class="bi me-2 bi-basket"></i>
                فروشگاه
            </a>
            <div class="collapse" id="shop-collapse"
                 style="background-color: rgba(13,110,253,0.1); border-radius: .25rem;">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="<?php echo SITE_URL; ?>catalogPanel.php" class="nav-link text-white">
                            <i class="bi me-2 bi-bag"></i>
                            مشاهده محصولات
                        </a></li>
                    <li><a href="<?php echo SITE_URL; ?>addProduct.php" class="nav-link text-white">
                            <i class="bi me-2 bi-cart-plus"></i>
                            افزودن محصول
                        </a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link text-white" data-bs-toggle="collapse" data-bs-target="#blog-collapse"
               aria-expanded="false">
                <i class="bi me-2 bi-book"></i>
                مقالات
            </a>
            <div class="collapse" id="blog-collapse"
                 style="background-color: rgba(13,110,253,0.1); border-radius: .25rem;">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="<?php echo SITE_URL; ?>blogPanel.php" class="nav-link text-white">
                            <i class="bi me-2 bi-book-half"></i>
                            مشاهده مقالات
                        </a></li>
                    <li><a href="<?php echo SITE_URL; ?>addBlog.php" class="nav-link text-white">
                            <i class="bi me-2 bi-vector-pen"></i>
                            نوشتن مقاله
                        </a></li>
                </ul>
            </div>
        </li>


        <li class="nav-item">
            <a href="#" class="nav-link text-white" data-bs-toggle="collapse" data-bs-target="#rol-collapse"
               aria-expanded="false">
                <i class="bi me-2 bi-ui-checks-grid"></i>
                نقش ها
            </a>
            <div class="collapse" id="rol-collapse"
                 style="background-color: rgba(13,110,253,0.1); border-radius: .25rem;">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="<?php echo SITE_URL; ?>showRoles.php" class="nav-link text-white">
                            <i class="bi me-2 bi-toggles"></i>
                            مشاهده نقش ها
                        </a></li>
                    <li><a href="<?php echo SITE_URL; ?>addRole.php" class="nav-link text-white">
                            <i class="bi me-2 bi-check-square"></i>
                            افزودن نقش
                        </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white" data-bs-toggle="collapse" data-bs-target="#user-collapse"
               aria-expanded="false">
                <i class="bi me-2 bi-person"></i>
                حساب ها
            </a>
            <div class="collapse" id="user-collapse"
                 style="background-color: rgba(13,110,253,0.1); border-radius: .25rem;">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="<?php echo SITE_URL; ?>showUsers.php" class="nav-link text-white">
                            <i class="bi me-2 bi-person-lines-fill"></i>
                            مشاهده کاربران
                        </a></li>
                    <li><a href="<?php echo SITE_URL; ?>addUser.php" class="nav-link text-white">
                            <i class="bi me-2 bi-person-plus"></i>
                            افزودن کاربر
                        </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white" data-bs-toggle="collapse" data-bs-target="#message-collapse"
               aria-expanded="false">
                <i class="bi me-2 bi-chat-square-text"></i>
                پیام ها
            </a>
            <div class="collapse" id="message-collapse"
                 style="background-color: rgba(13,110,253,0.1); border-radius: .25rem;">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="<?php echo SITE_URL; ?>showMessages.php" class="nav-link text-white">
                            <i class="bi me-2 bi-envelope-open"></i>
                            مشاهده پیام ها
                        </a></li>
                    <li><a href="<?php echo SITE_URL; ?>contact.php" class="nav-link text-white">
                            <i class="bi me-2 bi-pencil-square"></i>
                            درج پیام
                        </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a href="<?php echo SITE_URL; ?>setting.php" class="nav-link text-white">
                <i class="bi me-2 bi-gear"></i>
                تنظیمات
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
           data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/poshakoffer/public/assets/images/male-profile.jpg" alt="" width="32" height="32"
                 class="rounded-circle me-2">
            <strong><?php echo $_SESSION['uname']; ?></strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="userDetails.php?id=<?php echo $_SESSION['uid']; ?>">پروفایل</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="<?php echo SITE_URL;
                if (Authentication:: check()) echo 'logout.php'; else echo 'login.php'; ?>">خروج</a></li>
        </ul>
    </div>

</aside>