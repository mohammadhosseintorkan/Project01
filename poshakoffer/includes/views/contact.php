<?php
$title = 'تماس با ما';
$form = new Form();
$form -> textbox('عنوان پیام:', 'title', null, null, 'عنوان پیام الزامی است', 'required');
$form -> bigText('متن پیام:', 'body');
$main = '
		echo <<< EOT
		    <h1>تماس با ما</h1>
                $form
EOT;
';


if( Authentication :: check() )
    include 'templates/panel/master.php';
else
    include 'templates/master.php';
