<?php
$title = 'مقالات';
$main = '
			echo "<section class= \"w-50 mx-auto row row-cols-1 row-cols-sm-1 row-cols-x1-2 g-2\">";
				foreach ($table as $row){
					get_template_part("blogCard", null, $row);
				}
			echo "</section>";
';

include 'templates/master.php';