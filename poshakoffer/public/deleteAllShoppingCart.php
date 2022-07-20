<?php
include '__php__.php';

    if( isset( $_GET['id'] ) ) {



        unset( $_SESSION['sproductid'] );


    }
    else{
        Alert::alerts('شناسه محصول نامشخص!');
    }

redirect('shoppingCartPage.php');
