<?php
include '__php__.php';

    if( isset( $_GET['id'] ) ) {


        $index = array_search($_GET['id'], $_SESSION['sproductid']);
        array_splice($_SESSION['sproductid'], $index ,1);


    }
    else{
        Alert::alerts('شناسه محصول نامشخص!');
    }
redirect('shoppingCartPage.php');
