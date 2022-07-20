<?php
include '__php__.php';

$db = new DB();

    if ( isset( $_GET['id'] ) ) {

        $id = $_GET['id'];
        $table = Product::find("id = $id");

        foreach( $table as $key => $row){
            $userid = Authentication :: uid();
            if ($userid) {
                $likeTable = LikeProduct:: find("Userid = {$userid} AND Productid = {$row['id']}");
                if (isset($likeTable[0]))
                    $table[$key]['like'] = true;
            }
        }

        $row = $table[0];

        $alerts = Alert::alerts();

        view('productDetailsPanel', null, ['row' => $row], $alerts);
    }
    else{
        Alert::alerts('شناسه محصول نامشخص!');
        redirect('catalog.php');
    }

unset($db);