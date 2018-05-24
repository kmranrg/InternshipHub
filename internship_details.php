<?php
session_start();


$dblink = mysqli_connect( "localhost", "root", "", "internships" );
if ( $_GET[ 'id' ] == NULL ) {
	header( "Location:index.php" );
}
$query = "select * from internship where id = '" . $_GET[ 'id' ] . "'";
$result = mysqli_query( $dblink, $query );
$row = mysqli_fetch_assoc( $result );
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Internship</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<style>
		<?php include 'css/master.css';
		?>
	</style>

</head>

<body>

	<?php
	include( "includes/header_intern.php" );
	?>
	<div class="container" style="margin-left: 20px;">
		<h1>
			<?php echo $row['title']; ?>
		</h1>
		<h3>
			&ensp;&ensp;by <?php echo $row['orgname']; ?><br/>
		</h3>
	
		<h3>
			<img src="img/banners/<?php echo $row['imglink']; ?>"
			
		</h3>
	
		<h3>
			<br/>Description:<br/><br/>
			
		</h3>
	
		<h5>
			<?php echo $row['description']; ?>
		</h5>
		<h5>
			<br/><br/>Starting Date : <?php echo $row['startdate']; ?> <br/>
			Ending Date : <?php echo $row['enddate']; ?> <br/>
		</h5>
	
		<h5>
			<br/><br/>Salary: INR <?php echo $row['salary']; ?> <br/>
		</h5>
	
		<h5>
			<br/>Location : <?php echo $row['location']; ?> <br/>
		</h5>
	
		<form action="" method="post">
			<center>
				<button type="submit" class="btn btn-success" name="apply" value="apply">Apply</button><br/><br/><br/>
			</center>
	</div>



	</form>
	<?php
	if ( isset( $_POST[ "apply" ] ) ) {
		if ( @$_SESSION[ "id" ] == NULL ) {
			echo '<script>window.alert("Please Login");</script>';
		} else {
			include( "includes/insert.php" );
			appliedrecord();
		}
	}

	?>
	<?php
	include( "includes/footer.php" );
	?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	<script type="text/javascript">
		$( "#Login-toggle" ).click( function () {
			$( "#login-pane" ).toggle();
			$( ".overlay" ).toggle();
		} );
		$( ".login-close" ).click( function () {
			$( "#login-pane" ).toggle();
			$( ".overlay" ).toggle();
		} );

		$( "#std" ).click( function () {
			$( "#std" ).addClass( "active" );
			$( "#emp" ).removeClass( "active" );
			$( "#login-email" ).attr( "placeholder", "Student email" );
		} );

		$( "#emp" ).click( function () {
			$( "#std" ).removeClass( "active" );
			$( "#emp" ).addClass( "active" );
			$( "#login-email" ).attr( "placeholder", "Employee email" );
		} );
	</script>

</body>

</html>