<?php

function authentication() {
	$email = $_POST[ "email" ];
	$password = $_POST[ "password" ];
	if ( isset( $_POST[ "signin" ] ) ) {
		$dblink = mysqli_connect( "localhost", "root", "", "internships" );
		$emp_qry = "select * from employee where email='" . $email . "' and password='" . $password . "'";
		$stu_qry = "select * from student where email='" . $email . "' and password='" . $password . "'";
		$emp_res = mysqli_query( $dblink, $emp_qry );
		$stu_res = mysqli_query( $dblink, $stu_qry );
		$emp_row = mysqli_fetch_assoc( $emp_res );
		$stu_row = mysqli_fetch_assoc( $stu_res );
		if ( $emp_row != NULL ) {
			session_start();
			$_SESSION[ "email" ] = $emp_row[ 'email' ];
			header( "Location:emp_dashboard.php" );
		} else if ( $stu_row != NULL ) {
			session_start();
			$_SESSION[ "email" ] = $stu_row[ 'email' ];
			header( "Location:stu_dashboard.php" );
		} else {
			echo '<script>window.alert("Either username or password is incorrect (or not filled)");</script>';
		}
	}
}

function stu_authentication() {
	$email = $_POST[ "email" ];
	$password = $_POST[ "password" ];
	if ( isset( $_POST[ "signin" ] ) ) {
		$dblink = mysqli_connect( "localhost", "root", "", "internships" );
		$stu_qry = "select * from student where email='" . $email . "' and password='" . $password . "'";
		$stu_res = mysqli_query( $dblink, $stu_qry );
		$stu_row = mysqli_fetch_assoc( $stu_res );
		if ( $stu_row != NULL ) {
			session_start();
			$_SESSION[ "id" ] = $stu_row[ 'id' ];
			header( "Location:internship_details.php" );
		} else {
			echo '<script>window.alert("Either username or password is incorrect (or not filled)");</script>';
		}
	}
}

?>