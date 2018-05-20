<?php

function authentication() {
	$email = $_POST[ "email" ];
	$password = $_POST[ "password" ];
	if ( isset( $_POST[ "signin" ] ) ) {
		$dblink = mysqli_connect( "localhost", "root", "", "internships" );
		$qry = "select * from employee where email='" . $email . "' and password='" . $password . "'";
		$res = mysqli_query( $dblink, $qry );
		$row = mysqli_fetch_assoc( $res );
		if ( $row != NULL ) {
			session_start();
			$_SESSION[ "email" ] = $row[ 'email' ];
			header( "Location:emp_profile.php" );
		} else {
			echo '<script>window.alert("Either username or password is incorrect (or not filled)");</script>';
		}
	}
}
?>