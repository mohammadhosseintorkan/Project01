<?php
$title = 'جزییات محصول';
$main = ' 
			if( isset($alerts) )
				echo $alerts;
			get_template_part("productDetailsPanel", null, $row);
';

if( ! Authentication :: check() ){
    Alert::alerts('شما اجازه ورود به این بخش را ندارید!');
    redirect('dashboard.php');
}
else
    include 'templates/panel/master.php';