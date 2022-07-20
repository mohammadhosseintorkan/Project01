<?php
$title ='ویرایش کاربر';
$form = new Form();
$form -> textbox('نام', 'firstname', "{$firstname}", null, null, 'required');
$form -> textbox('نام خانوادگی', 'lastname', "{$lastname}", null, null, 'required');
$form -> date('تاریخ تولد', 'birthday', "{$birthday}");
$form -> number('شماره موبایل', 'mobile', "{$mobile}", null, null, 'required');
$form -> email('ایمیل', null, "{$email}", null, null, 'required');
$form -> textbox('نام کاربری', 'username', "{$username}", null, null, 'required');
$form -> password('کلمه عبور', null, null, null, 'حداقل 8 کاراکتر<br> حروف و اعداد و کاراکترهای ویژه', 'required');
$form -> password('تکرار کلمه عبور', 'repass');
$form -> image('تصویر کاربر', 'userPicture');
$main = '
		echo $form;
';

include 'templates/panel/master.php';


/*<h1>ویرایش کاربر</h1>
                <h3>مشخصات حساب کاربری</h3>*/