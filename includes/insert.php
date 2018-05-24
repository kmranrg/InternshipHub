<?php

function sturecord() {
	$dt = mysqli_connect( "localhost", "root", "", "internships" );

	if ( isset( $_POST[ "submit" ] ) ) {
		$name = $_POST[ "name" ];
		$email = $_POST[ "email" ];
		$password = $_POST[ "password" ];
		$contact = $_POST[ "contact" ];
		$city = $_POST[ "city" ];

		if ( mysqli_query( $dt, "INSERT INTO `student` (`id`, `name`, `email`, `password`, `contact`, `city`) VALUES (NULL, '" . $name . "', '" . $email . "', '" . $password . "', '" . $contact . "', '" . $city . "');" ) ) {
			echo '<script>window.alert("Successfully submitted");</script>';
		}
	}
}

function emprecord() {
	$dt = mysqli_connect( "localhost", "root", "", "internships" );

	if ( isset( $_POST[ "submit" ] ) ) {
		$org = $_POST[ "org" ];
		$name = $_POST[ "name" ];
		$email = $_POST[ "email" ];
		$password = $_POST[ "password" ];
		$contact = $_POST[ "contact" ];
		$city = $_POST[ "city" ];

		if ( mysqli_query( $dt, "INSERT INTO `employee` (`id`, `orgname`, `name`, `email`, `password`, `contact`, `city`) VALUES (NULL, '" . $org . "', '" . $name . "', '" . $email . "', '" . $password . "', '" . $contact . "', '" . $city . "');" ) ) {
			echo '<script>window.alert("Successfully submitted");</script>';
		}
	}
}

function internshiprecord() {
	$dt = mysqli_connect( "localhost", "root", "", "internships" );
	@$UIDX = $_SESSION[ "email" ];
	$resx = mysqli_query( $dt, "select * from employee where email='" . $UIDX . "'" );
	$rowx = mysqli_fetch_assoc( $resx );

	if ( isset( $_POST[ "submit" ] ) ) {
		$title = $_POST[ "title" ];
		$descp = $_POST[ "descp" ];
		$sdate = $_POST[ "sdate" ];
		$edate = $_POST[ "edate" ];
		$city = $_POST[ "city" ];
		$salary = $_POST[ 'salary' ];

		//file upload
		if ( isset( $_FILES[ 'file' ] ) ) {
			$error = array();
			@$fileName = NULL;
			@$fileSize = $_FILES[ 'file' ][ 'size' ];
			@$fileType = $_FILES[ 'file' ][ 'type' ];
			@$filetmp = $_FILES[ 'file' ][ 'tmp_name' ];
			@$fileName = preg_replace( "#[^a-z0-9.]#i", "", $fileName );

			//limit the file type
			$target_dir = "images/profile/";
			$target_file = $target_dir . basename( $_FILES[ "file" ][ "name" ] );
			$imageFileType = pathinfo( $target_file, PATHINFO_EXTENSION );
			if ( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "" ) {
				$error = "Extension not Supported Please select only Jpg & png";
				echo '<script>window.alert("Sorry, only JPG, JPEG & PNG files are allowed");</script>';
			}

			//limit the file size
			if ( $fileSize > 1123000 ) {
				$error = "Please select file less than 2mb";
				echo '<script>window.alert("Please select file less than 2mb");</script>';
			}

			//now  upload file
			if ( empty( $error ) ) {
				$fileName = $_FILES[ 'file' ][ 'name' ];
				move_uploaded_file( $filetmp, "img/banners/$fileName" );
			}
		}

		//end of file upload

		if ( mysqli_query( $dt, "INSERT INTO `internship` (`id`, `views`, `orgname`, `title`, `description`, `startdate`, `enddate`, `location`, `salary`, `imglink`) VALUES (NULL, '0', '" . $rowx[ 'orgname' ] . "', '" . $title . "', '" . $descp . "', '" . $sdate . "', '" . $edate . "', '" . $city . "', '" . $salary . "', '" . $fileName . "');" ) ) {
			echo '<script>window.alert("Successfully submitted");</script>';
		}
	}
}

function appliedrecord() {
	$dt = mysqli_connect( "localhost", "root", "", "internships" );

	if ( isset( $_POST[ "apply" ] ) ) {
		$stu_id = $_SESSION[ "id" ];
		$emp_id = $_GET[ 'id' ];

		if ( mysqli_query( $dt, "INSERT INTO `applied` (`student_id`, `internship_id`) VALUES ('" . $stu_id . "', '" . $emp_id . "');" ) ) {
			echo '<script>window.alert("Successfully submitted");</script>';
		}
	}
}

?>