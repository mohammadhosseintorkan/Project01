<?php
$title = 'ورود';
$form = new Login();
$a = '<a href = "addUser.php" class = "btn btn-link">ثبت نام کنید</a>';
$main = '
        echo $form;
        echo $a;
';

include 'templates/master.php';