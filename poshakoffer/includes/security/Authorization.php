<?php
if(! class_exists('Authorization')) {
	class Authorization{
		static public function check( $permission ){
            if ( ! Authentication :: check() )
                return false;
            $uid = Authentication :: uid();
            $table = Role::join("User.id = {$uid}");
            $row = $table[0];
		    if ( $row[$permission] )
		        return true;
		    else
		        return false;



			    //
			//$table = Role :: join("User.id = {$uid}");
			//
			//return boolval( $row[$permission] );
		}
	}
}