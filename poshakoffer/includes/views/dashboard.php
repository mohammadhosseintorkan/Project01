<?php
$title = 'داشبورد';
$main = '
            if( isset($alerts) )
				echo $alerts;
			get_template_part("dashboard");
';

include 'templates/panel/master.php';