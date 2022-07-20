<?php
if(! class_exists('Login')) {
    class Login extends Form {
        public function __construct(){
            $this -> textbox("نام کاربری", 'username', null, null, null, 'required');
            $this -> password("کلمه عبور", null, null, null, null, 'required');
        }
    }
}



