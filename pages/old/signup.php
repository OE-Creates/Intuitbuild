<?php
	require "../backend/core_logic.php";
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>IntuitBuild: Sign Up</title>
		
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		
		<!-- Intergrated CSS -->
		<link rel="stylesheet" href="../css/styles.css?v=<?php echo time(); ?>">
	</head>
	<body>
		<!-- ____________________________________________________________________________________________________________________ -->
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar_box-shadow">
			<div class="container-fluid">
				<img src="../images/app_logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					</ul>
					<form class="d-flex login_box" role="login">
					<!--<input class="form-control me-2" type="text" placeholder="Username" aria-label="Username">-->
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">@</span>
							<input type="text" class="form-control username_login" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					<!--<input class="form-control me-2" type="password" placeholder="Password" aria-label="Password">-->
						<div class="input-group">
							<span class="input-group-text password_login" id="basic-addon1">#</span>
							<input type="password" class="form-control  password_login_input" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
						</div>
						<button class="btn btn-outline-primary login_btn" type="button" name="submit_login">LOGIN</button>
					</form>
				</div>
			</div>
		</nav>
		
		<!-- ____________________________________________________________________________________________________________________ -->
		
		<div class="container-lg">
			<div class="header_space"></div>
			
		<!-- ____________________________________________________________________________________________________________________ -->
			
			<div class="row page_title_space">
			
				<div class="col-1">
				</div>
				
				<div class="col-lg-10 page_title">
					<p>Let's get you signed up.</p>
				</div>
				
				<div class="col-1">
				</div>
			
			</div>
			
		<!-- ____________________________________________________________________________________________________________________ -->
			
			<div class="row">
				
				<div class="col-3">
				</div>
				
				<div class="col-lg-6 sign-up_content_box box-shadow">
					<form>
						<div class="form-floating mt-3 mb-3">
							<input type="email" class="form-control" id="floatingUsername" placeholder="UserName12345">
							<label for="floatingUsername">Username</label>
						</div>
						<div class="form-floating mb-3">
							<input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
							<label for="floatingEmail">Email address</label>
						</div>
						<div class="form-floating mb-3">
							<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
							<label for="floatingPassword">Password</label>
						</div>
						<div class="form-floating mb-3">
							<input type="password" class="form-control" id="floatingConfirmPassword" placeholder="Password">
							<label for="floatingConfirmPassword">Confirm Password</label>
						</div>
						<button type="button" class="btn btn-primary col-12 mb-3" name="sign_up_confirm">Sign Up</button>
					</form>
				</div>
				
				<div class="col-3">
				</div>
				
			</div>
			
		<!-- ____________________________________________________________________________________________________________________ -->
			
			<div class="footer_space"></div>
		</div>
		
		<!-- ____________________________________________________________________________________________________________________ -->
		
		<nav class="navbar navbar-expand-lg navbar-dark  bg-dark fixed-bottom">
			<div class="container-fluid">
				<p class="d-inline-block align-text-top"></p>
				<p class="navbar-brand login_box"></p>
			</div>
		</nav>
		
		<!-- ____________________________________________________________________________________________________________________ -->
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>