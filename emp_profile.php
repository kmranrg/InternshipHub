<?php
//after session out page will redirect to login page
session_start();
if ( !isset( $_SESSION[ "email" ] ) ) {
	header( "Location:index.php" );
}

$db = mysqli_connect( "localhost", "root", "", "internships" );
@$UID = $_SESSION[ "email" ];
$res = mysqli_query( $db, "select * from employee where email='" . $UID . "'" );
$row = mysqli_fetch_assoc( $res );
?>



<html lang="en">

<head>



	<!-- Required meta tags -->
	<!--  <meta http-equiv="refresh" content="3">-->
	<meta charset="utf-8">
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

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="sideNav">
		<a class="navbar-brand js-scroll-trigger" href="#page-top">
          <span class="d-none d-lg-block">
		  <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="rounded" height="100px" width="100px"></img>
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
					<a class="nav-link js-scroll-trigger" id="logout" href="#">Log-out</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="right-ct">
		<div class="jumbotron" id="about-ct">
			<h1>
				<?php echo $row['name'];?>
			</h1>
		</div>
		<div class="jumbotron hidden" id="update-ct">
			<h1>This is update page</h1>
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