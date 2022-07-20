<?php
$title = 'محصولات';

$main = '
			echo "<section class= \"row row-cols-2 row-cols-sm-4 row-cols-x1-3 g-6\">";
				foreach ($table as $row){
					get_template_part("productCardPanel", null, $row);
				}
			echo "</section>";
';

if (!Authentication:: check()) {
    Alert::alerts('شما اجازه ورود به این بخش را ندارید!');
    redirect('dashboard.php');
} else
    include 'templates/panel/master.php';

