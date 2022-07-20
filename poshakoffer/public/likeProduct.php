<?php
include '__php__.php';

//$parameters = $_POST;
if( isset( $_GET['id'] ) && Validation :: naturalNumber( $_GET['id'] ) ){
	
	$productid = $_GET['id'];
	// بررسی آیا این شماره محصول وجود دارد

	$db = new DB();
	$userid = Authentication :: uid();
    if ($userid){
        $table = LikeProduct :: find( "Userid = {$userid} AND Productid = {$productid}" );

        if( isset($table[0]) ) {// محصول قبلا لایک شده
            // آن را از لایک در بیار
            $row = $table[0];
            LikeProduct :: delete( $row['id'] );
        }
        else{
            // محصول را لایک کن
            $parameters = [
                'Userid'	=> $userid,
                'Productid'	=> $productid
            ];

            // B. Insert in DB
            LikeProduct :: add( $parameters );
        }
    }
    else{
        Alert::alerts('شما مجوز لایک محصول را ندارید!');
        redirect('dashboard.php');
    }

	unset( $db );
}
else {
	Alert::alerts('دسترسی غیر مجاز!');
	redirect('dashboard.php');
}
redirect('catalog.php'); // با ایجکس نیاز نیست