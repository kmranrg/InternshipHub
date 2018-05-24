<?php

function stu_record() {
	$dt = mysqli_connect( "localhost", "root", "", "internships" );

	if ( isset( $_POST[ "update" ] ) ) {
		$name = $_POST[ "name" ];
		$email = $_POST[ "email" ];
		$password = $_POST[ "password" ];
		$contact = $_POST[ "contact" ];
		$city = $_POST[ "city" ];
		$id = ( int )$_SESSION[ "id" ];

		$qry = "update student set name = '" . $name . "', email = '" . $email . "', password = '" . $password . "', contact = '" . $contact . "', city = '" . $city . "' where id = $id ";

		if ( mysqli_query( $dt, $qry ) ) {
			echo '<script>window.alert("Profile updated, just refresh the page");</script>';
		} else {
			echo '<script>window.alert("Profile not updated");</script>';
		}

	}
}

function emp_record() {
	$dt = mysqli_connect( "localhost", "root", "", "internships" );

	if ( isset( $_POST[ "update" ] ) ) {
		$orgname = $_POST[ "orgname" ];
		$name = $_POST[ "name" ];
		$email = $_POST[ "email" ];
		$password = $_POST[ "password" ];
		$contact = $_POST[ "contact" ];
		$city = $_POST[ "city" ];
		$id = ( int )$_SESSION[ "id" ];

		$qry = "update employee set orgname = '" . $orgname . "', name = '" . $name . "', email = '" . $email . "', password = '" . $password . "', contact = '" . $contact . "', city = '" . $city . "' where id = $id ";

		if ( mysqli_query( $dt, $qry ) ) {
			echo '<script>window.alert("Profile updated, just refresh the page");</script>';
		} else {
			echo '<script>window.alert("Profile not updated");</script>';
		}

	}
}


?>