<?php 
	function mysql_prep( $value ) {
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists( "mysql_real_escape_string" );
		if ( $new_enough_php ) {
			//undo any magic quote effect 
			if( $magic_quotes_active ) { $value = stripslashes( $value ); }
			$value = mysql_real_escape_string( $value );
		} else {
			//if magic quotes aren't already on then add slashes manually
			if ( !$magic_quotes_active ) { $value = addslashes( $value ); }
			//if magic quotes are active, then the slashes already exist	
		}
		return $value;
	}
	
	function redirect( $location = NULL ) {
		if ( $location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}
	
	function confirm_query( $result_set ) {
		if ( !$result_set ) {
			die('Database Query Failed!: ' . mysql_error());
		}
	}
?>