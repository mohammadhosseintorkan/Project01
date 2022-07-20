<?php
$allPrice = '525600';
$title = 'سبد خرید';
$main = '    
			echo "<h2>سبد خرید</h2>
			
			<section class= \"mx-auto row-1\">";
				foreach ($table as $row){
					get_template_part("shoppingCartPageCard", null, $row);
				}
			echo "</section>
			
			<footer class=\"card-footer\">
    <section class=\"row justify-content-between\">
                        <span class=\"col\">
                            <a href=\"deleteAllShoppingCart.php?id="; $id; echo "\" class=\"btn btn-danger m-1\">حذف همه</a>
                        </span>
                        <span class=\"col text-end\">قیمت کل : '.number_format($allPrice).' تومان</span>
        </section>
</footer>";
';

include 'templates/master.php';