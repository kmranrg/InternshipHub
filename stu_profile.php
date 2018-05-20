<html lang="en">

<head>

	<!-- Required meta tags -->
	<meta http-equiv="refresh" content="3">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<style media="screen">
		.jumbotron {
			width: 100%;
			float: left;
			position: relative;
		}
		
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
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
		<a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Start Bootstrap</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
      </span>
    </a>
	

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#education">Education</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="right-ct">
		<div class="jumbotron " id="login-pane">
			<form class="form-horizontal" action="/action_page.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="title" placeholder="Enter Title">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<textarea class="form-control" rows="5" id="descp" name="descp" placeholder="Enter Description"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="organisation" readonly value="internsala" placeholder="Enter Title">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="start-date" placeholder="Start date (dd-mm-yyyy)">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="end-date" placeholder="End date (dd-mm-yyyy)">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<select class="form-control" id="city">
							<option>--Select Location--</option>
							<option>New Delhi</option>
							<option>Bengluru</option>
							<option>Kolkata</option>
							<option>Hyderabad</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-12">
						<div class="checkbox">
							<label><input name="paid-type"  id="paid" type="Radio"> Paid</label>
							<label><input name="paid-type" id="unpaid" type="Radio"> Unpaid</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="payment" placeholder="Salary">
					</div>
				</div>

				<div class="form-group">
					<label for="fileToUpload" class="col-sm-12">Select Banner:</label>
					<div class="col-sm-12">
						<input type="file" name="fileToUpload" id="fileToUpload">
					</div>
				</div>


				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-12">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
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


</body>

</html>