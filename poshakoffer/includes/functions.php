<?php
include 'alert.php';
include 'upload.php';
include 'DB/DB.php';
include 'security/Authentication.php';
include 'security/Authorization.php';
include 'security/Validation.php';
include 'form/form.php';

if( ! function_exists('get_header') ){
    function get_header($name = null, $path = '', $args = array()){
        get_template_part($path . 'header', $name, $args);
    }
}

/*if ( ! function_exists('get_master') ){
    function get_master($name = null, $args = array()){
        get_template_part('master', $name, $args);
    }
}*/

if( ! function_exists('get_sidebar') ){
    function get_sidebar($name = null, $path = '', $args = array()){
        get_template_part($path . 'sidebar', $name, $args);
    }
}

if( ! function_exists('get_footer') ){
    function get_footer($name = null, $path = '', $args = array()){
        get_template_part($path . 'footer', $name, $args);
    }
}

if ( ! function_exists('get_template_part') ){
    function get_template_part($slug, $name = null , $args = array()){
        if ( isset( $name ) )
            $name = "-{$name}";
        $__pathToTemplate = "views/templates/{$slug}{$name}.php";

        if ( ! isset($args) )
            $args = array();
        $args = safeScript($args);
        foreach ($args as $key => $value) {
            $$key = $value;
        }

        include $__pathToTemplate;
    }
}

function safeScript($arg){
    if( is_array($arg) )
        foreach($arg as $key => $value)
            $arg['key'] = safeScript($value);
    else
        $arg = htmlspecialchars($arg);
    return $arg;
}

if( ! function_exists('view') ){
    function view($slug, $name = null, $args = array(), $alerts = null){ // 'home'
        if( isset( $name ) )
            $name = "-{$name}"; // '-home'
        $__pathToTemplate = "views/{$slug}{$name}.php";


        if( isset($args) )
            foreach($args as $key => $value){
                $$key = $value;
            }

        include $__pathToTemplate;
    }
}

if( ! function_exists('redirect') ){
	function redirect( $address ){
		header("Location: {$address}");
		exit();
	}
}

function mySessionStater(){
    //if(session_status() !== PHP_SESSION_ACTIVE){
    $lifetime = 365 * 24 * 60 * 60 ;
    session_set_cookie_params ( $lifetime , $path = '/', $domain = $_SERVER['HTTP_HOST'] , $secure = false , $httponly = true );
    session_start();
    //}
}