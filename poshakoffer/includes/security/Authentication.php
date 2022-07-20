<?php
if(! class_exists('Authentication')) {
	class Authentication{
        static public function login( $uid , $uname ){
            $_SESSION['uid'] = $uid;
            $_SESSION['uname'] = $uname;
            $_SESSION['lastLogin'] = time();
        }
		
		static public function check(){
			return isset( $_SESSION['uid'] );
		}
		
		static public function logout(){
			unset( $_SESSION['uid'] );
			unset( $_SESSION['uname'] );
		}
		
		static public function uid(){
            if( self :: check() )
                return $_SESSION['uid'];
            else
                return false;
		}

        static public function autoLogout(){
            if( self :: check() ){
                if( time() - $_SESSION['lastLogin'] > LOGIN_DEADLINE * 24 * 60 * 60 ){ // 30 days
                    self :: logout();
                    //Alert::alerts('مدتی غیرفعال بودید، لطفا مجددا وارد شوید!', 'warning');
                }

                if( time() - $_SESSION['lastActivity'] > ACTIVITY_DEADLINE * 60 ){ // 10 min
                    self :: logout();
                    //Alert::alerts('مدتی غیرفعال بودید، لطفا مجددا وارد شوید!', 'warning');
                }
                $_SESSION['lastActivity'] = time();
            }
        }

	}
}