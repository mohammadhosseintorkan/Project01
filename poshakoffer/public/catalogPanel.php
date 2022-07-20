<?php
    include '__php__.php';

    $db = new DB();
    $table = Product::find();

    foreach( $table as $key => $row){
        $userid = Authentication :: uid();
        if ($userid) {
            $likeTable = LikeProduct:: find("Userid = {$userid} AND Productid = {$row['id']}");
            if (isset($likeTable[0]))
                $table[$key]['like'] = true;
        }
    }

    unset( $db );

    $alerts = Alert::alerts();

    view('catalogPanel', null, ['table' => $table], $alerts);