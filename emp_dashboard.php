<?php
//after session out page will redirect to main page
session_start();
if ( !isset( $_SESSION[ "email" ] ) ) {
	header( "Location:index.php" );
}
$db = mysqli_connect( "localhost", "root", "", "internships" );
@$UID = $_SESSION[ "email" ];
$res = mysqli_query( $db, "select * from employee where email='" . $UID . "'" );
$row = mysqli_fetch_assoc( $res );
$intern_res = mysqli_query( $db, "select * from internship where orgname='" . $row[ 'orgname' ] . "'" );
?>

<html lang="en">

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<style media="screen">
		#payment {
			display: none;
		}
		
		@media (min-width: 992px) {
			#sideNav {
				text-align: center;
				position: fixed;
				top: 0;
				left: 0;
				display: flex;
				flex-direction: column;
				width: 20%;
				height: 100vh;
			}
			#sideNav .navbar-brand {
				display: flex;
				margin: auto auto 0;
				padding: 0.5rem;
			}
			#sideNav .navbar-brand .img-profile {
				max-width: 10rem;
				max-height: 10rem;
				border: 0.5rem solid rgba(255, 255, 255, 0.2);
			}
			#sideNav .navbar-collapse {
				display: flex;
				align-items: flex-start;
				flex-grow: 0;
				width: 100%;
				margin-bottom: auto;
			}
			#sideNav .navbar-collapse .navbar-nav {
				flex-direction: column;
				width: 100%;
			}
			#sideNav .navbar-collapse .navbar-nav .nav-item {
				display: block;
			}
			#sideNav .navbar-collapse .navbar-nav .nav-item .nav-link {
				display: block;
			}
			.right-ct {
				margin-left: 20%;
				width: 80%;
			}
		}
		
		.hidden {
			display: none;
		}
		
		.rounded {
			height: 100px;
			width: 100px;
			border-radius: 50%;
		}
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


</head>

<body style="background-color: #e9ecef">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="sideNav">
		<a class="navbar-brand js-scroll-trigger" href="#page-top">
          <span class="d-none d-lg-block">
		  <img src="http://www.free-icons-download.net/images/male-user-logo-icon-65890.png" class="rounded" height="100px" width="100px"></img>
      </span>
    </a>
	

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item">
					<br><br>
				</li>

				<li class="nav-item">
					<a class="nav-link js-scroll-trigger active" id="about" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" id="update" href="#">Update Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" id="publish" href="#">Publish Internship</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" id="logout" href="index.php">Log-out</a>
				</li>
				<br/><br/><br/><br/><br/><br/><br/>
				<div class="container" style="color: white">
					<center>
						<p>Copyright &copy; Internshala</p>
					</center>
				</div>
			</ul>
		</div>
	</nav>
	<div class="right-ct">
		<div class="jumbotron" id="about-ct">
			<h1>
				<?php echo $row["name"];?>
			</h1>
			<h5>
				Your posted Internships
			</h5>
		

			<div class="container">


				<div class="row">
					<?php
					$i = 0;
					while ( $intern_row = $intern_res->fetch_assoc() ) {
						$data[ $i ] = $intern_row;
						if ( ( $i % 3 ) == 0 ) {
							echo '</div>  <div class="row">';
						}
						?>
					<div class="col-md-4" style="padding:0px;margin-top:20px;">
						<div class="carousel-img">
							<img src="img/banners/<?php echo $data[$i]['imglink']; ?>" width="90%">
						</div>
						<div class="author">
							<span class="auth_name">
                 <h4><strong>          <?php echo $data[$i]['title'];  ?> </strong><br><small><?php echo $data[$i]['orgname']; ?></small> </h4>
              </span>
						</div>
						<div class="carousel-content" style="width: 90%">
							<h6><strong>Description</strong></h6>
							<p>
								<?php echo $data[$i]['description'];  ?>
							</p>
						</div>
					</div>

					<?php
					$i++;
					}
					?>

				</div>
			</div>
		</div>


		<div class="jumbotron hidden" id="update-ct">
			<h1>Profile</h1><br/>
			<form class="form-horizontal" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="title" name="orgname" value="<?php echo $row['orgname']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="title" name="name" value="<?php echo $row['name']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="title" name="email" value="<?php echo $row['email']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="title" name="password" value="<?php echo $row['password']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="title" name="contact" value="<?php echo $row['contact']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="title" name="city" value="<?php echo $row['city']; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-12">
						<button type="submit" name="update" value="update" class="btn btn-success">Update</button>
					</div>
					<?php
					if ( ( @$_POST[ "update" ] ) == "update" ) {
						//for updating the record
						include( "includes/update.php" );
						emp_record();
					}
					?>
				</div>
			</form>
		</div>

		<div class="jumbotron hidden" id="publish-ct">
			<h1>Internship Details</h1>
			<br/>
			<form class="form-horizontal" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<textarea class="form-control" rows="5" id="descp" name="descp" placeholder="Enter Description" required></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="organisation" readonly value="<?php echo $row['orgname'];?>" placeholder="Enter Title" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="start-date" name="sdate" placeholder="Start date (dd-mm-yyyy)" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="end-date" name="edate" placeholder="End date (dd-mm-yyyy)" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<select class="form-control" name="city" id="city" required>
							<option>--Select Location--</option>
							<option value="New Delhi">New Delhi</option>
							<option value="Bengluru">Bengluru</option>
							<option value="Kolkata">Kolkata</option>
							<option value="Hyderabad">Hyderabad</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-12">
						<div class="checkbox">
							<label><input name="paid-type"  id="paid" type="Radio" required> Paid</label>
							<label><input name="paid-type" id="unpaid" type="Radio" required> Unpaid</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="payment" name="salary" value="0" placeholder="Salary">
					</div>
				</div>

				<div class="form-group">
					<label for="fileToUpload" class="col-sm-12">Select Banner:</label>
					<div class="col-sm-12">
						<input type="file" name="file" id="fileToUpload" required>
					</div>
				</div>


				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-12">
						<button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
					</div>
					<?php
					if ( ( @$_POST[ "submit" ] ) == "submit" ) {
						//for inserting the record
						include( "includes/insert.php" );
						internshiprecord();
					}
					?>
				</div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$( function () {
			$( '#paid' ).click( function () {
				if ( $( this ).is( ':checked' ) ) {
					$( "#payment" ).css( "display", "block" );
				}
			} );
		} );
		$( function () {
			$( '#unpaid' ).click( function () {
				if ( $( this ).is( ':checked' ) ) {
					$( "#payment" ).css( "display", "none" );
				}
			} );
		} );
	</script>
	<script>
		$( document ).ready( function () {
			$( "#about" ).click( function () {
				removeActive();
				hideAll();
				console.log( "test success" )
				$( "#about" ).addClass( "active" );
				$( "#about-ct" ).removeClass( "hidden" );
			} );
			$( "#update" ).click( function () {
				removeActive();
				hideAll();
				$( "#update" ).addClass( "is-active" );
				$( "#update-ct" ).removeClass( "hidden" );
			} );

			$( "#publish" ).click( function () {
				removeActive();
				hideAll();
				$( "#publish" ).addClass( "is-active" );
				$( "#publish-ct" ).removeClass( "hidden" );
			} );

			$( "#logout" ).click( function () {
				removeActive();
				hideAll();
				$( "#logout" ).addClass( "active" );
				$( "#logout-ct" ).removeClass( "hidden" );
			} );

			function removeActive() {
				$( "#about" ).removeClass( "is-active" );
				$( "#update" ).removeClass( "is-active" );
				$( "#publish" ).removeClass( "is-active" );
				$( "#logout" ).removeClass( "is-active" );

			}

			function hideAll() {
				$( "#about-ct" ).addClass( "hidden" );
				$( "#update-ct" ).addClass( "hidden" );
				$( "#publish-ct" ).addClass( "hidden" );
				$( "#logout-ct" ).addClass( "hidden" );
			}
		} );
	</script>

</body>

</html>