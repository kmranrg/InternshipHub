<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Internshala</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<style>
		<?php include 'css/master.css';
		?>
	</style>

</head>

<body>

	<?php 
		include("includes/header.php"); 
	?>

	<div class="row text-center" id="cameras">
		<div class="col-md-3 col-sm-6 home-feature">
			<div class="thumbnail">
				<img src="img/5.jpg" alt="">
				<div class="caption">
					<h3>Cannon EOS </h3>
					<p>Price: Rs. 36000.00 </p>
					<?php if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Apply Now</a>
					</p>
					<?php
					} else {
						//We have created a function to check whether this particular product is added to cart or not.
						if ( check_if_added_to_cart( 1 ) ) { //This is same as if(check_if_added_to_cart != 0)
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
						} else {
							?>
					<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
					}
					?>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 home-feature">
			<div class="thumbnail">
				<img src="img/2.jpg" alt="">
				<div class="caption">
					<h3>Samsung EOS </h3>
					<p>Price: Rs. 40,000.00 </p>
					<?php if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Apply Now</a>
					</p>
					<?php
					} else {
						//We have created a function to check whether this particular product is added to cart or not.
						if ( check_if_added_to_cart( 2 ) ) { //This is same as if(check_if_added_to_cart != 0)
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
						} else {
							?>
					<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
					}
					?>
					</a>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 home-feature">
			<div class="thumbnail">
				<img src="img/3.jpg" alt="">
				<div class="caption">
					<h3>Sony DSLR</h3>
					<p>Price: Rs. 50000.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Apply Now</a>
					</p>
					<?php
					} else {
						//We have created a function to check whether this particular product is added to cart or not.
						if ( check_if_added_to_cart( 3 ) ) { //This is same as if(check_if_added_to_cart != 0)
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
						} else {
							?>
					<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
					}
					?>
					</a>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 home-feature">
			<div class="thumbnail">
				<img src="img/4.jpg" alt="">
				<div class="caption">
					<h3>Olympus DSLR</h3>
					<p>Price: Rs. 50000.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Apply Now</a>
					</p>
					<?php
					} else {
						//We have created a function to check whether this particular product is added to cart or not.
						if ( check_if_added_to_cart( 4 ) ) { //This is same as if(check_if_added_to_cart != 0)
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
						} else {
							?>
					<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
					}
					?>
					</a>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 home-feature">
			<div class="thumbnail">
				<img src="img/5.jpg" alt="">
				<div class="caption">
					<h3>Cannon EOS </h3>
					<p>Price: Rs. 36000.00 </p>
					<?php if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Apply Now</a>
					</p>
					<?php
					} else {
						//We have created a function to check whether this particular product is added to cart or not.
						if ( check_if_added_to_cart( 1 ) ) { //This is same as if(check_if_added_to_cart != 0)
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
						} else {
							?>
					<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
					}
					?>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 home-feature">
			<div class="thumbnail">
				<img src="img/2.jpg" alt="">
				<div class="caption">
					<h3>Samsung EOS </h3>
					<p>Price: Rs. 40,000.00 </p>
					<?php if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Apply Now</a>
					</p>
					<?php
					} else {
						//We have created a function to check whether this particular product is added to cart or not.
						if ( check_if_added_to_cart( 2 ) ) { //This is same as if(check_if_added_to_cart != 0)
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
						} else {
							?>
					<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
					}
					?>
					</a>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 home-feature">
			<div class="thumbnail">
				<img src="img/3.jpg" alt="">
				<div class="caption">
					<h3>Sony DSLR</h3>
					<p>Price: Rs. 50000.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Apply Now</a>
					</p>
					<?php
					} else {
						//We have created a function to check whether this particular product is added to cart or not.
						if ( check_if_added_to_cart( 3 ) ) { //This is same as if(check_if_added_to_cart != 0)
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
						} else {
							?>
					<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
					}
					?>
					</a>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 home-feature">
			<div class="thumbnail">
				<img src="img/4.jpg" alt="">
				<div class="caption">
					<h3>Olympus DSLR</h3>
					<p>Price: Rs. 50000.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Apply Now</a>
					</p>
					<?php
					} else {
						//We have created a function to check whether this particular product is added to cart or not.
						if ( check_if_added_to_cart( 4 ) ) { //This is same as if(check_if_added_to_cart != 0)
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
						} else {
							?>
					<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
					}
					?>
					</a>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 home-feature">
			<div class="thumbnail">
				<img src="img/5.jpg" alt="">
				<div class="caption">
					<h3>Cannon EOS </h3>
					<p>Price: Rs. 36000.00 </p>
					<?php if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Apply Now</a>
					</p>
					<?php
					} else {
						//We have created a function to check whether this particular product is added to cart or not.
						if ( check_if_added_to_cart( 1 ) ) { //This is same as if(check_if_added_to_cart != 0)
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
						} else {
							?>
					<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
					}
					?>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 home-feature">
			<div class="thumbnail">
				<img src="img/2.jpg" alt="">
				<div class="caption">
					<h3>Samsung EOS </h3>
					<p>Price: Rs. 40,000.00 </p>
					<?php if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Apply Now</a>
					</p>
					<?php
					} else {
						//We have created a function to check whether this particular product is added to cart or not.
						if ( check_if_added_to_cart( 2 ) ) { //This is same as if(check_if_added_to_cart != 0)
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
						} else {
							?>
					<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
					}
					?>
					</a>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 home-feature">
			<div class="thumbnail">
				<img src="img/3.jpg" alt="">
				<div class="caption">
					<h3>Sony DSLR</h3>
					<p>Price: Rs. 50000.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Apply Now</a>
					</p>
					<?php
					} else {
						//We have created a function to check whether this particular product is added to cart or not.
						if ( check_if_added_to_cart( 3 ) ) { //This is same as if(check_if_added_to_cart != 0)
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
						} else {
							?>
					<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
					}
					?>
					</a>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 home-feature">
			<div class="thumbnail">
				<img src="img/4.jpg" alt="">
				<div class="caption">
					<h3>Olympus DSLR</h3>
					<p>Price: Rs. 50000.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Apply Now</a>
					</p>
					<?php
					} else {
						//We have created a function to check whether this particular product is added to cart or not.
						if ( check_if_added_to_cart( 4 ) ) { //This is same as if(check_if_added_to_cart != 0)
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
						} else {
							?>
					<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
					}
					?>
					</a>
				</div>
			</div>
		</div>


	</div>


	<?php 
		include("includes/footer.php"); 
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