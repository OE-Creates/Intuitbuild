<?php
	require "./backend/core_logic.php";
	require "./backend/login_logic.php";
	require "./backend/signup_logic.php";
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>IntuitBuild: Welcome</title>
		
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		
		<!-- Intergrated CSS -->
		<link rel="stylesheet" href="./css/styles.css?v=<?php echo time(); ?>">
	</head>
	<body>
		<!-- ____________________________________________________________________________________________________________________ -->
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar_box-shadow">
			<div class="container-fluid">
				<img src="./images/app_logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
			<!--<a class="navbar-brand" href="#">IntuitBuild</a>-->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<!--<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Dropdown
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled">Disabled</a>
						</li>
						-->
					</ul>
					<form class="d-flex login_box" role="login" method="POST">
					<!--<input class="form-control me-2" type="text" placeholder="Username" aria-label="Username">-->
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">@</span>
							<input type="email" class="form-control username_login_input" name="loginemail" minlength="5" maxlength="20" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
						</div>
					<!--<input class="form-control me-2" type="password" placeholder="Password" aria-label="Password">-->
						<div class="input-group">
							<span class="input-group-text password_login" id="basic-addon1">#</span>
							<input type="password" class="form-control password_login_input" name="loginpass" maxlength="15" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
						</div>
						<button class="btn btn-outline-primary login_btn" type="submit" name="submit_login">LOGIN</button>
					</form>
				</div>
			</div>
		</nav>
		
		<!-- ____________________________________________________________________________________________________________________ -->
		
		<div class="d-grid justify-content-md-end fixed-top sign-up_button">
			<button class="btn btn-lg btn-primary me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#signup_modal" name="submit_signup">SIGN UP</button>
		</div>
		
		<div class="modal" id="signup_modal" tabindex="-1" aria-labelledby="signUpButtonLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Sign Up</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="POST">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingUsername" name="uname" pattern="[A-Za-z0-9 ]+" minlength="5" maxlength="20" placeholder="example" required>
								<label for="floatingUsername">Username</label>
							</div>
							<div class="form-floating mb-3">
								<input type="email" class="form-control" id="floatingEmail" name="uemail" minlength="5" maxlength="20" placeholder="example" required>
								<label for="floatingEmail">Email address</label>
							</div>
							<div class="form-floating mb-3">
								<input type="password" class="form-control" id="floatingPassword" name="upass" minlength="7" maxlength="15" placeholder="example" required>
								<label for="floatingPassword">Password</label>
							</div>
							<div class="form-floating mb-3">
								<input type="password" class="form-control" id="floatingConfirmPassword" name="upass2" minlength="7" maxlength="15" placeholder="example" required>
								<label for="floatingConfirmPassword">Confirm Password</label>
							</div>
							<div>
								<button type="submit" class="btn btn-primary col-12" name="submit_signupconfirm">Sign Up</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- ____________________________________________________________________________________________________________________ -->
		
		<div class="container-lg">
			<div class="header_space"></div>
			
			<img src="./images/main_name.jpg" class="img-fluid home_img box-shadow" alt="...">
			<img src="./images/main_ax.jpg" class="img-fluid home_img box-shadow" alt="...">
			<img src="./images/main_bx.jpg" class="img-fluid home_img box-shadow" alt="...">
			<img src="./images/main_cx.jpg" class="img-fluid home_img box-shadow" alt="...">
			
			<!--<form action="pages/userdashboard.php">
				<button>User Dashboard</button>
			</form>
			
			<form action="pages/admindashboard.php">
				<button>Admin Dashboard</button>
			</form>
			
			<form action="pages/management.php">
				<button>Management</button>
			</form>-->
			
			<div class="footer_space"></div>
		</div>
		
		<!-- ____________________________________________________________________________________________________________________ -->
		
		<nav class="navbar navbar-expand-lg navbar-dark  bg-dark fixed-bottom">
			<div class="container-fluid">
			<!--<img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">-->
				<p class="d-inline-block align-text-top"></p>
				<p class="navbar-brand login_box"></p>
			<!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				-->
			</div>
		</nav>
		
		<!-- ____________________________________________________________________________________________________________________ -->
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>