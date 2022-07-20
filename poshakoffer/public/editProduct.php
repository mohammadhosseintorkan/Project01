<?php
include '__php__.php';

$db = new DB();

if (!Authorization:: check('ProductEdit')) {
    Alert::alerts('شما مجوز ویرایش محصول را ندارید!');
    redirect('dashboard.php');
}


$parameters = $_POST;

if (isset($_GET['id'])) {

    if (isset($_POST['submit'])) {

        if (Validation::tokenCheck($_POST['csrf_token'])) {

            $imgSrc = 'image.jpg';
            $row = '';

            unset($parameters['submit']);
            unset($parameters['csrf_token']);

            $sizeProduct = '';

            if (isset($parameters['sizeProduct'])) {
                $checkBox = $parameters['sizeProduct'];
                for ($i = 0; $i < sizeof($checkBox); $i++) {
                    $sizeProduct .= $checkBox[$i];
                    if ($i < sizeof($checkBox) - 1) {
                        $sizeProduct .= " | ";
                    }
                }
            }

            $image = new Upload($_FILES['productPicture']);

            $imgSrc = $image->permanent();

            $parameters['imgSrc'] = $imgSrc;
            $parameters['sizeProduct'] = $sizeProduct;
            $parameters['id'] = $_GET['id'];


            $form = new EditProduct($parameters);
            if ($form->valid) {
                // B. Insert in DB

                Product::update($parameters);

            } else
                Alert::alerts('خطا در ویرایش!');


        } else {
            Alert::alerts('دسترسی غیر مجاز!');
            redirect('dashboard.php');
        }
    } else
        $form = new EditProduct();

    $table = Product::find("id = {$_GET['id']}");
    $row = $table[0];
} else {
    Alert::alerts('شناسه محصول نامشخص!');
}

unset($db);

$alerts = Alert::alerts();
view('editProduct', null, ['form' => $form, $row], $alerts);



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