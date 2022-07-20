<?php
include '__php__.php';

$db = new DB();
$result = count($_SESSION['sproductid']);
if ($result != 0){
    foreach ($_SESSION['sproductid'] as $key => $id){
        settype($id,"string");
        if (isset($idsum))
            $idsum = $idsum.' or (id = '.$id.')';
        else
            $idsum = '(id = '.$id.')';

        $table = Product::find($idsum);
    }
}else{
    Alert::alerts('سبد خرید خالی میباشد!');
    redirect('catalog.php');
}

unset($db);

$alerts = Alert::alerts();

view('shoppingCartPage', null, ['table' => $table], $alerts);