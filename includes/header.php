<div class="jumbotron" style="position: relative">
	<div class="container">
		<img src="img/logo.png" height="80px" width="200px" style="margin-left: 20px">
		<div class="btn-right">
			<button type="button" id="Login-toggle" class="btn btn-info">Login</button>&nbsp;&nbsp;
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
 					Register
  					<span class="caret"></span>
  				</button>
			
				<ul class="dropdown-menu">
					<li><a href="stu_register.php">As Student</a>
					
					</li>
					<li><a href="emp_register.php">As Employee</a>
					
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="overlay">

</div>

<div class="jumbotron" id="login-pane">
	<div class="container">
		<ul class="nav nav-pills justify-content-center">
			<li class="nav-item">
				<label for="std-login" class="nav-link active" id="std">Student</label>
				<input type="radio" name="usr-category" class="hidden" value="student" id="std-login">

			</li>
			<li class="nav-item">
				<label for="emp-login" class="nav-link" id="emp">Employee</label>
				<input type="radio" class="hidden" name="usr-category" value="employee" id="emp-login">
			</li>
			<li class="nav-item">
		</ul>
		<br>
	</div>
	<button type="button" class="login-close" style="position: absolute;top:10px;right:10px;">
        <span aria-hidden="true">&times;</span>
      </button>


	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">@</span>
		</div>
		<input type="text" class="form-control" id="login-email" placeholder="Student email">
	</div>
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text"><img src="img/key.svg" height="15px" > </span>
		</div>
		<input type="text" class="form-control" placeholder="Password">
	</div>
	<div class="form-group">
		<div class="col-sm-10">
			<center><button type="submit" class="btn btn-primary">Sign in</button>
			</center>
		</div>
	</div>
</div>