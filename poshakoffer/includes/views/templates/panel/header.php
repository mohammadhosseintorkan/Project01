

<nav class='navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl ' id='navbarBlur'
     data-scroll='false'>
    <div class='container-fluid py-1 px-3'>
        <nav aria-label='breadcrumb'>
            <ol class='breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5'>
                <li class='breadcrumb-item text-sm text-white active' aria-current='page'>پنل کاربری</li>
            </ol>
        </nav>
        <div class='collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4' id='navbar'>
            <div class='ms-md-auto pe-md-3 d-flex align-items-center'>
                <div class='input-group'>
                    <span class='input-group-text text-body'><i class='fas fa-search' aria-hidden='true'></i></span>
                    <input type='text' class='form-control' placeholder='Type here...'>
                </div>
            </div>
            <ul class='navbar-nav  justify-content-end'>


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


                <li class='nav-item d-xl-none ps-3 d-flex align-items-center'>
                    <a href='#' class='nav-link text-white p-0' id='iconNavbarSidenav'>
                        <div class='sidenav-toggler-inner'>
                            <i class='sidenav-toggler-line bg-white'></i>
                            <i class='sidenav-toggler-line bg-white'></i>
                            <i class='sidenav-toggler-line bg-white'></i>
                        </div>
                    </a>
                </li>
                <li class='nav-item px-3 d-flex align-items-center'>
                    <a href='setting.php' class='nav-link text-white p-0'>
                        <i class='fa fa-cog fixed-plugin-button-nav cursor-pointer'></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>