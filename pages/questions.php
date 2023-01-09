<?php
	require "../backend/core_logic.php";
	require "../backend/question_logic.php";
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>IntuitBuild: Info Gathering</title>
		
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
					<p>Okay <?php echo $_SESSION["user_name"]; ?>. Let's get started.</p>
				</div>
				
				<div class="col-1">
				</div>
			
			</div>
			
		<!-- ____________________________________________________________________________________________________________________ -->
			
			<form method="POST">
			
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="recommendname" minlenth="5" maxlength="16" placeholder="Build Name" aria-label="Build Name" aria-describedby="basic-addon1" required>
					<input type="text" class="form-control" name="recommenddescr" maxlength="128" placeholder="Build Description" aria-label="Build Description" aria-describedby="basic-addon1">
				</div>
				
				<div class="row">
				
					<div class="col-lg">
						<div class=" question_box box-shadow pb-3 mb-3">
							<div class="container-lg pt-3">
								<h5>Use/Budget</h5>
							</div>
							<hr>
							<div class="container-lg question_box_content">
								<div class="col-fluid">
									<label for="floatingQ1" class="form-label">Q1: What is this build for?</label>
								</div>
								<div class="col-lg">
									<select class="form-select" name="question_1" aria-label="Q1" required>
										<option value="Content, Digital Art">Content Generation, Digital Art</option>
										<option value="Content, Music">Content Generation, Music</option>
										<option value="Content, Video Editing">Content Generation, Video Editing</option>
										<option value="Content, 3D Designing">Content Generation, 3D Designing</option>
										<option value="Content, Simulation Calc.">Content Generation, Simulation Calculations</option>
										<option value="Content, Forex Monitoring">Content Generation, Forex Monitoring</option>
										<option value="Content, Programming">Content Generation, Programming</option>
										<option value="Content, Record Keeping">Content Generation, Record Keeping</option>
										<option value="Content, Text Processing">Content Generation, Text Processing</option>
										<option value="Gaming, Competitive FPS">Gaming, Competitive FPS</option>
										<option value="Gaming, Leisure FPS">Gaming, Leisure FPS</option>
										<option value="Gaming, Explorative">Gaming, Explorative</option>
										<option value="Gaming, Old Lightweight">Gaming, Old Lightweight</option>
										<option value="Gaming, Browser">Gaming, Browser</option>
										<option value="Storage, Permanent Storage">Storage, Permanent Backup Storage</option>
										<option value="Storage, Live Storage">Storage, Live Backup Storage</option>
										<option value="Storage, Frequent Use">Storage, Frequent Use Storage</option>
										<option value="Server, High Load">Server, High Load</option>
										<option value="Server, Redundancy">Server, Redundancy</option>
									</select>
								</div>
							</div>
							
							<div class="container-lg question_box_content">
								<div class="col-fluid">
									<label for="floatingQ2" class="form-label">Q2: What's your working budget for this system? (USD)</label>
								</div>
								<div class="col-lg">
									<input type="number" class="form-control" name="question_2" min="1" aria-label="Q2" aria-describedby="basic-addon1" required>
								</div>
							</div>
							
							<div class="container-lg question_box_content">
								<div class="col-fluid">
									<label for="floatingQ3" class="form-label">Q3: How system resource intensive are the general suite of software you intend to use?</label>
								</div>
								<div class="col-lg">
									<select class="form-select" name="question_3" aria-label="Q3" required>
										<option value="Very Heavy" selected>Very Heavy</option>
										<option value="Very Heavy Instant Use">Very Heavy Instant Use</option>
										<option value="Heavy">Heavy</option>
										<option value="Heavy Instant Use">Heavy Instant Use</option>
										<option value="Normal">Normal</option>
										<option value="Normal Prolonged Use">Normal Prolonged Use</option>
										<option value="Light">Light</option>
										<option value="Light Instant Use">Light Instant Use</option>
									</select>
								</div>
							</div>
							<div class="container-lg question_box_content">
								<div class="col-fluid">
									<label for="floatingQ4" class="form-label">Q4: How many hours do you expect to be using the system daily?</label>
								</div>
								<div class="col-lg">
									<select class="form-select" name="question_4" aria-label="Q4" required>
										<option value="2" selected>2</option>
										<option value="6">6</option>
										<option value="10">10</option>
										<option value="12">12</option>
										<option value="16">16</option>
										<option value="Non-daily, 2">Non-daily, 2</option>
										<option value="Non-daily, 6">Non-daily, 6</option>
										<option value="Non-daily, 10">Non-daily, 10</option>
										<option value="Non-daily, 12">Non-daily, 12</option>
										<option value="Non-daily, 16">Non-daily, 16</option>
										<option value="Always On">Always On</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg">
						<div class=" question_box box-shadow pb-3 mb-3">
							<div class="container-lg pt-3">
								<h5>Use/Preference</h5>
							</div>
							<hr>
							<div class="container-lg question_box_content">
								<div class="col-fluid">
									<label for="floatingQ5" class="form-label">Q1: At what level do you engage with your common-use software?</label>
								</div>
								<div class="col-lg">
									<select class="form-select" name="question_5" aria-label="Q5" required>
										<option value="Professional" selected>Professional</option>
										<option value="Content Creator">Content Creator</option>
										<option value="Enthusiast">Enthusiast</option>
										<option value="Hobbyist">Hobbyist</option>
										<option value="Casual">Casual Use</option>
										<option value="Light Investment">Light Investment</option>
									</select>
								</div>
							</div>
							
							<div class="container-lg question_box_content">
								<div class="col-fluid">
									<label for="floatingQ6" class="form-label">Q2: What form and style of PC design would you prefer?</label>
								</div>
								<div class="col-lg">
									<select class="form-select" name="question_6" aria-label="Q6" required>
										<option value="Unique" selected>Unique Case Design</option>
										<option value="Modern, Heavy Accents">Modern Case Design (With Heavy RGB Accents)</option>
										<option value="Modern, Light Accents">Modern Case Design (With Light RGB Accents)</option>
										<option value="Modern, No Accents">Modern Case Design (With No RBG Accents)</option>
										<option value="Industrial">Industrial Case Design</option>
									</select>
								</div>
							</div>
							
							<div class="container-lg question_box_content">
								<div class="col-fluid">
									<label for="floatingQ7" class="form-label">Q3: How many users will the system have on a reqular basis?</label>
								</div>
								<div class="col-lg">
									<input type="number" class="form-control" name="question_7" min="1" aria-label="Q7" aria-describedby="basic-addon1" required>
								</div>
							</div>
							
							<div class="container-lg question_box_content">
								<div class="col-fluid">
									<label for="floatingQ8" class="form-label">Q4: Will you need to connect a lot of peripheral devices to the PC?</label>
								</div>
								<div class="col-lg">
									<select class="form-select" name="question_8" aria-label="Q8" required>
										<option value="Yes" selected>Yes</option>
										<option value="No">No</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg">
						<div class=" question_box box-shadow pb-3 mb-3">
							<div class="container-lg pt-3">
								<h5>Work Area</h5>
							</div>
							<hr>
							<div class="container-lg question_box_content">
								<div class="col-fluid">
									<label for="floatingQ9" class="form-label">Q1 What noise decibal can you tolerate from your PC?</label>
								</div>
								<div class="col-lg">
									<select class="form-select" name="question_9" aria-label="Q9" required>
										<option value="5" selected>5 Db</option>
										<option value="15">15 Db</option>
										<option value="25">25 Db</option>
										<option value="40">40 Db</option>
										<option value="50">50 Db</option>
									</select>
								</div>
							</div>
							
							<div class="container-lg question_box_content">
								<div class="col-fluid">
									<label for="floatingQ10" class="form-label">Q2: Will the computer be in your vicinity at all times?</label>
								</div>
								<div class="col-lg">
									<select class="form-select" name="question_10" aria-label="Q10" required>
										<option value="Yes" selected>Yes</option>
										<option value="No">No</option>
									</select>
								</div>
							</div>
							
							<div class="container-lg question_box_content">
								<div class="col-fluid">
									<label for="floatingQ11" class="form-label">Q3: How large is the space the computer will be used in?</label>
								</div>
								<div class="col-lg">
									<select class="form-select" name="question_11" aria-label="Q11" required>
										<option value="very large" selected>Very Large</option>
										<option value="Large">Large</option>
										<option value="Medium">Medium</option>
										<option value="Small">Small</option>
										<option value="Very Small">Very Small</option>
									</select>
								</div>
							</div>
							
							<div class="container-lg question_box_content">
								<div class="col-fluid">
									<label for="floatingQ12" class="form-label">Q4: How would you rate the ventilation system of the PC work space?</label>
								</div>
								<div class="col-lg">
									<select class="form-select" name="question_12" aria-label="Q12" required>
										<option value="Open Air Area" selected>Open Air Space</option>
										<option value="Good">Good</option>
										<option value="Decent">Decent</option>
										<option value="Bad">Bad</option>
										<option value="Closed-Off Space">Closed-Off Space</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				<div class="container-fluid">
					<button type="button" class="btn btn-primary col-6 offset-3" data-bs-toggle="modal" data-bs-target="#submitquestions_modal">Get Recommendation</button>
				</div>
			
				<div class="modal" id="submitquestions_modal" tabindex="-1" aria-labelledby="questionsButtonLabel" aria-hidden="true">
					<div class="modal-dialog modal-sm modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="staticBackdropLabel">Confirm</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary" name="submit_questions">Accept</button>
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Decline</button>
							</div>
						</div>
					</div>
				</div>
			
			</form>
			
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