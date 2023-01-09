<?php
	require "../backend/core_logic.php";
	require "../backend/recommends_logic.php";
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>IntuitBuild: Recommendation</title>
		
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
					<form method="GET" class="d-flex login_box" role="logout">
						<button class="btn btn-outline-primary" type="submit" name="submit_logout">LOGOUT</button>
					</form>
				</div>
			</div>
		</nav>
		
		<!-- ____________________________________________________________________________________________________________________ -->
		
		<form method="GET">
			<div class="d-grid justify-content-end fixed-top returndb_button">
				<button class="btn btn-lg btn-primary me-md-2" type="submit" name="submit_returntodb">BACK</button>
			</div>
		</form>
		
		<div class="container-lg">
			<div class="header_space"></div>
			
		<!-- ____________________________________________________________________________________________________________________ -->
			
			<div class="row page_title_space">
			
				<div class="col-1">
				</div>
				
				<div class="col-lg-10 page_title">
					<p><?php echo $_SESSION["user_name"]; ?>'s <?php echo $_SESSION["recommend_name"]; ?> recommendation.</p>
				</div>
				
				<div class="col-1">
				</div>
			
			</div>
			
		<!-- ____________________________________________________________________________________________________________________ -->
			
			<div class="row">
			
				<div class="col-lg-7 mb-3">
					<div class="recommends_content_primary box-shadow">
						<div class="container-lg pt-3">
							<h5>Build Components</h5>
						</div>
						<hr>
						<div class="container-lg buildcomponents_list">
							<?php require '../backend/displayrecommendsinfo_logic.php'; ?>
						</div>
						<hr>
						<div class="container-lg">
							<h3>Estimated Total: $<?php echo $_SESSION['recommend_cost']; ?></h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-5">
					<div class="recommends_content_questions box-shadow p-2 mb-3">
						<button type="button" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#questions_modal">View Recommendation Questions</button>
					</div>
					
					<div class="recommends_content_secondary box-shadow">
						<div class="container-lg pt-3">
							<h5>Assembly Instructions</h5>
						</div>
						<hr>
						<div class="container-lg instruct_list">
							<?php require '../backend/instructset_logic.php'; ?>
						</div>
					</div>
				</div>
			
			</div>
		
		<!-- ____________________________________________________________________________________________________________________ -->
		
				<div class="modal" id="questions_modal" tabindex="-1" aria-labelledby="questionsButtonLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="staticBackdropLabel">Questions</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<strong>Use/Budget</strong>
								<hr>
								<strong>Q1: What is this build for?</strong><br><p>Answer: <?php echo $_SESSION["recommend_q1"]; ?></p>
								<strong>Q2: What's your working budget for this system? (USD)</strong><br><p>Answer: $<?php echo $_SESSION["recommend_q2"]; ?></p>
								<strong>Q3: How system resource intensive are the general suite of software you intend to use?</strong><br><p>Answer: <?php echo $_SESSION["recommend_q3"]; ?></p>
								<strong>Q4: How many hours do you expect to be using the system daily?</strong><br><p>Answer: <?php echo $_SESSION["recommend_q4"]; ?></p>
								<br>
								<strong>Use/Preference</strong>
								<hr>
								<strong>Q1: At what level do you engage with your common-use software?</strong><br><p>Answer: <?php echo $_SESSION["recommend_q5"]; ?></p>
								<strong>Q2: What form and style of PC design would you prefer?</strong><br><p>Answer: <?php echo $_SESSION["recommend_q6"]; ?></p>
								<strong>Q3: How many users will the system have on a reqular basis?</strong><br><p>Answer: <?php echo $_SESSION["recommend_q7"]; ?> User</p>
								<strong>Q4: Will you need to connect a lot of peripheral devices to the PC?</strong><br><p>Answer: <?php echo $_SESSION["recommend_q8"]; ?></p>
								<br>
								<strong>Work Area</strong>
								<hr>
								<strong>Q1 What noise decibal can you tolerate from your PC?</strong><br><p>Answer: <?php echo $_SESSION["recommend_q9"]; ?> Db</p>
								<strong>Q2: Will the computer be in your vicinity at all times?</strong><br><p>Answer: <?php echo $_SESSION["recommend_q10"]; ?></p>
								<strong>Q3: How large is the space the computer will be used in?</strong><br><p>Answer: <?php echo $_SESSION["recommend_q11"]; ?></p>
								<strong>Q4: How would you rate the ventilation system of the PC work space?</strong><br><p>Answer: <?php echo $_SESSION["recommend_q12"]; ?></p>
							</div>
						</div>
					</div>
				</div>
		
		<!-- ____________________________________________________________________________________________________________________ -->
			
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