<?php
$title = 'ثبت نام';
$form = new Register();
$main = '
         echo $form;
';

if( Authentication :: check() )
    include 'templates/panel/master.php';
else
    include 'templates/master.php';




/*<a href = "login.php" class = "btn btn-link">وارد شوید</a> */