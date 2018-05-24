<?php
//after session out page will redirect to main page
session_start();
if ( !isset( $_SESSION[ "id" ] ) ) {
	header( "Location:index.php" );
}

$db = mysqli_connect( "localhost", "root", "", "internships" );
$UID = ( int )$_SESSION[ "id" ];
$stu_res = mysqli_query( $db, "select * from student where id = $UID " );
$stu_row = mysqli_fetch_assoc( $stu_res );
$app_res = mysqli_query( $db, "select * from applied where student_id = $UID " );
$intern_res = array();
?>

<html lang="en">

<head>

	<!-- Required meta tags -->
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

<body style="background-color: #e9ecef">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="sideNav">
		<a class="navbar-brand js-scroll-trigger" href="#page-top">
          <span class="d-none d-lg-block">
		  <img src="http://www.free-icons-download.net/images/male-user-logo-icon-65890.png" height="120px" width="120px"></img>
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
					<a class="nav-link js-scroll-trigger" id="profile" href="#">Update Profile</a>
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
				<?php echo $stu_row['name'];?>
			</h1>
			<h5>
				Internships you have applied
			</h5>
		

			<div class="container">
				<div class="row">
					<?php
					$i = 0;
					while ( $app_row = $app_res->fetch_assoc() ) {
						$intern_res[ $i ] = mysqli_query( $db, "select * from internship " );
						while ( $intern_row = $intern_res[ $i ]->fetch_assoc() ) {
							if ( $intern_row[ 'id' ] == $app_row[ 'internship_id' ] ) {
								if ( ( $i % 3 ) == 0 ) {
									echo '</div>  <div class="row">';
								}
								?>
					<div class="col-md-4" style="padding:0px;margin-top:20px;">
						<div class="carousel-img">
							<img src="img/banners/<?php echo $intern_row['imglink']; ?>" width="90%">
						</div>


						<div class="author">
							<span class="auth_name">
                 <h4><strong>          <?php echo $intern_row['title'];  ?> </strong><br><small>by&ensp;<?php echo $intern_row['orgname']; ?></small> </h4>
              </span>
						</div>
						<div class="carousel-content" style="width: 90%">
							<h6><strong>Description</strong></h6>
							<p>
								<?php echo $intern_row['description'];  ?>
							</p>
						</div>
					</div>
					<?php
					}
					}
					$i++;
					}
					?>

				</div>
			</div>
		</div>

		<div class="jumbotron hidden" id="my-profile">
			<h1>My Profile</h1>
			<br/>
			<form class="form-horizontal" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="title" name="name" value="<?php echo $stu_row['name']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="title" name="email" value="<?php echo $stu_row['email']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="title" name="password" value="<?php echo $stu_row['password']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="title" name="contact" value="<?php echo $stu_row['contact']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="title" name="city" value="<?php echo $stu_row['city']; ?>" required>
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
						stu_record();
					}
					?>
				</div>
			</form>
		</div>


	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	s
	<script>
		$( document ).ready( function () {
			$( "#about" ).click( function () {
				removeActive();
				hideAll();
				console.log( "test success" )
				$( "#about" ).addClass( "active" );
				$( "#about-ct" ).removeClass( "hidden" );
			} );

			$( "#profile" ).click( function () {
				removeActive();
				hideAll();
				$( "#profile" ).addClass( "is-active" );
				$( "#my-profile" ).removeClass( "hidden" );
			} );

			$( "#logout" ).click( function () {
				removeActive();
				hideAll();
				$( "#logout" ).addClass( "active" );
				$( "#logout-ct" ).removeClass( "hidden" );
			} );

			function removeActive() {
				$( "#about" ).removeClass( "is-active" );
				$( "#profile" ).removeClass( "is-active" );
				$( "#logout" ).removeClass( "is-active" );

			}

			function hideAll() {
				$( "#about-ct" ).addClass( "hidden" );
				$( "#my-profile" ).addClass( "hidden" );
				$( "#logout-ct" ).addClass( "hidden" );
			}
		} );
	</script>

</body>

</html>