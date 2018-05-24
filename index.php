<?php
$dblink = mysqli_connect( "localhost", "root", "", "internships" );
$query = "select * from internship";
$stu_query = "select * from student";
$result = mysqli_query( $dblink, $query );
$stu_result = mysqli_query( $dblink, $stu_query );
$data = array();
?>
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

	<div class="container">


		<div class="row">
			<?php
			$i = 0;
			while ( $row = $result->fetch_assoc() ) {
				$data[ $i ] = $row;
				if ( ( $i % 3 ) == 0 ) {
					echo '</div>  <div class="row">';
				}
				?>
			<div class="col-md-4" style="padding:0px;margin-top:20px;">
				<div class="carousel-img">
					<img src="https://c.wallhere.com/photos/70/bc/Frontside_Misty_Counter_Strike_Global_Offensive_colorful_weapon_military_AKM-55873.jpg!d" width="90%">
				</div>
				<div class="author">
					<div class="img_author">
						<img src="{{asset('images/temp.jpg')}}" width="90%">
					</div>
					<span class="auth_name">
                 <h4><strong>          <?php echo $data[$i]['title'];  ?> </strong><br><small><?php echo $data[$i]['orgname']; ?></small> </h4>
              </span>
				</div>
				<div class="carousel-content" style="width: 90%">
					<h6><strong>Description</strong></h6>
					<p>
						<?php echo $data[$i]['description'];  ?>
					</p>
					<?php $v = $data[$i]['id']; ?>
					<a href="internship_details.php?id=<?php echo $v; ?>" name="apply" value="apply" class="btn btn-block btn-primary">Apply Now</a>
				</div>

			</div>



			<?php
			$i++;
			}
			?>

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