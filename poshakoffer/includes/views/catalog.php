<?php
$title = 'کاتالوگ';
$main = '
			echo "<section class= \"mx-auto row row-cols-2 row-cols-sm-4 row-cols-x1-3 g-6\">";
				foreach ($table as $row){
					get_template_part("productCard", null, $row);
				}
			echo "</section>";
';

include 'templates/master.php';