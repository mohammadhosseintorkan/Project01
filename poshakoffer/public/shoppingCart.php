<?php
include '__php__.php';

$db = new DB();
$sproductid = array();
/*
if (!Authorization:: check('ProductEdit')) {
    Alert::alerts('شما مجوز ویرایش محصول را ندارید!');
    redirect('dashboard.php');
}
*/

if (isset($_GET['id'])) {
    if (isset($_SESSION['sproductid'])){
        $sproductid = $_SESSION['sproductid'];
    }

    array_push($sproductid, $_GET['id']);
    $_SESSION['sproductid'] = $sproductid;

} else {
    Alert::alerts('شناسه محصول نامشخص!');
}

$alerts = Alert::alerts();
redirect('catalog.php');



/*foreach ($sizeProductArray as $checkValue)
{
$sizeProduct = $row['sizeProduct'];
    $sizeProduct = explode( ' | ', $sizeProduct );
    var_dump($sizeProduct);
    ?>
    <script>
        var sizeProduct = "<?php $checkValue ?> ;"
        document.getElementById(sizeProduct).checked = true;
    </script>
<?php
}*/