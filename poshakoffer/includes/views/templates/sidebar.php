<aside class="col-12 col-lg-2 d-flex flex-column flex-shrink-0 p-3 sid">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="<?php echo SITE_URL; ?>index.php" class="nav-link active" aria-current="page">
                <i class="bi me-2 bi-house-door"></i>
                خانه
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo SITE_URL; ?>catalog.php" class="nav-link text-dark" data-bs-toggle="collapse"
               data-bs-target="#shop-collapse" aria-expanded="false">
                <i class="bi me-2 bi-basket"></i>
                فروشگاه
            </a>
            <div class="collapse" id="shop-collapse"
                 style="background-color: rgba(243, 130, 91, 0.2); border-radius: .25rem;">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="<?php echo SITE_URL; ?>catalogMans.php" class="nav-link text-dark">
                            مردانه
                        </a></li>
                    <li><a href="<?php echo SITE_URL; ?>catalogWomans.php" class="nav-link text-dark">
                            زنانه
                        </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a href="<?php echo SITE_URL; ?>blog.php" class="nav-link text-dark">
                <i class="bi me-2 bi-book"></i>
                وبلاگ
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo SITE_URL; ?>contact.php" class="nav-link text-dark">
                <i class="bi me-2 bi-telephone-inbound"></i>
                تماس با ما
            </a>
        </li>
    </ul>
    <hr>

</aside>
