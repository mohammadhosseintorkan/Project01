<?php
$title = 'ویرایش محصول';
$row = $args["0"];

$main = '
			echo $form;
';

include 'templates/panel/master.php';
?>

<script>

    var name = "<?php if( isset($row['name']) ) echo $row['name']; ?>";
    var price = "<?php if( isset($row['price']) ) echo $row['price']; ?>";
    var productPicture = "<?php if( isset($row['productPicture']) ) echo $row['productPicture']; ?>";
    var sexProduct = "<?php if( isset($row['sexProduct']) ) echo $row['sexProduct']; ?>";
    var typeProduct = "<?php if( isset($row['typeProduct']) ) echo $row['typeProduct']; ?>";
    var description = "<?php if( isset($row['description']) ) echo $row['description']; ?>";

    document.getElementById('name').value= name;
    document.getElementById('price').value= price;
    document.getElementById('productPicture').value= productPicture;
    document.getElementById('sexProduct').value= sexProduct;
    document.getElementById('typeProduct').value= typeProduct;
    document.getElementById('description').value= description;


</script>