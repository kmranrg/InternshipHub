<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/master.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/master.css">
	<style>
		.btn-right {
			display: none;
		}
	</style>
</head>

<body>

	<?php 
		include("includes/header.php"); 
	?>

	<div class="container-fluid decor_bg" id="content">
		<div class="row">
			<div class="container">
				<div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
					<h2>SIGN UP</h2>
					<form method="POST">
						<div class="form-group">
							<input class="form-control" placeholder="Name" name="name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" required="true">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required="true">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Contact" maxlength="10" size="10" name="contact" required="true">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="City" name="city" required="true">
						</div>
						<button type="submit" name="submit" value="sub" class="btn btn-primary">Submit</button>
						<?php
						if ( ( @$_POST[ "submit" ] ) == "sub" ) {
							//for inserting the record
							include( "includes/insert.php" );
							sturecord();
						}
						?>
					</form>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<?php 
		include("includes/footer.php"); 
	?>

</body>

</html>