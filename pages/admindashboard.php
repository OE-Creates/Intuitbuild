<?php
	require "../backend/core_logic.php";
	require "../backend/admin_logic.php";
	require "../backend/user_logic.php";
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>IntuitBuild: Dashboard</title>
		
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
		
		<div class="container-lg">
			<div class="header_space"></div>
			
		<!-- ____________________________________________________________________________________________________________________ -->
			
			<div class="row page_title_space">
			
				<div class="col-1">
				</div>
				
				<div class="col-lg-10 page_title">
					<p>Welcome, <?php echo $_SESSION["user_name"]; ?>.</p>
				</div>
				
				<div class="col-1">
				</div>
			
			</div>
			
		<!-- ____________________________________________________________________________________________________________________ -->
			
			<div class="row">
			
				<div class="col-lg-2 mb-3">
					<form method="GET">
						<div class="dashboard_buttons box-shadow">
							<div class="col-12 btn-group-vertical">
								<button class="btn btn-primary" type="button" name="home">Home</button>
								<button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#profile_modal">Profile</button>
								<button class="btn btn-light" type="submit" name="submit_management">Management</button>
								<button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#settings_modal">Settings</button>
								<button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#feedback_modal">Feedback</button>
							</div>
						</div>
					</form>
				</div>
				
		<!-- ____________________________________________________________________________________________________________________ -->
		<!-- MODAL CONTENT FOR BUTTON GROUP -->
		
				<div class="modal" id="profile_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="profileButtonLabel" aria-hidden="true">
					<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="staticBackdropLabel"> <?php echo $_SESSION["user_name"]; ?>'s System Profile</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form method="POST">
									<div class="row">
										
										<div class="col-12">
											<label for="floatingMotherboard" class="form-label">Motherboard: <?php echo $_SESSION["profile_mb1"]; ?> | <?php echo $_SESSION["profile_mb2"]; ?> | <?php echo $_SESSION["profile_mb3"]; ?> | <?php echo $_SESSION["profile_mb4"]; ?></label>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingMB1" name="update_mb1" value="<?php echo $_SESSION["profile_mb1"]; ?>" placeholder="example">
												<label for="floatingMB1">Brand Model</label>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingMB2" name="update_mb2" value="<?php echo $_SESSION["profile_mb2"]; ?>" placeholder="example">
												<label for="floatingMB2"> M.2 NVME Support</label>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingMB3" name="update_mb3" value="<?php echo $_SESSION["profile_mb3"]; ?>" placeholder="example">
												<label for="floatingMB3">Processor Support Level (Gen 7)</label>
											</div>
										</div>
										<div class="col-lg-2">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingMB4" name="update_mb4" value="<?php echo $_SESSION["profile_mb4"]; ?>" placeholder="example">
												<label for="floatingMB4">RAM Slots</label>
											</div>
										</div>
										<div class="col-2 mb-3">
											<button type="submit" class="btn btn-primary" name="profile_updatemb">Update</button>
										</div>
										
										<hr>
										
										<div class="col-12">
											<label for="floatingCPU" class="form-label">CPU: <?php echo $_SESSION["profile_cpu1"]; ?> | <?php echo $_SESSION["profile_cpu2"]; ?> | <?php echo $_SESSION["profile_cpu3"]; ?> | <?php echo $_SESSION["profile_cpu4"]; ?></label>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingCPU1" name="update_cpu1" value="<?php echo $_SESSION["profile_cpu1"]; ?>" placeholder="example">
												<label for="floatingCPU1">Brand Model</label>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingCPU2" name="update_cpu2" value="<?php echo $_SESSION["profile_cpu2"]; ?>" placeholder="example">
												<label for="floatingCPU2">PCIExp Support Level (Gen 3)</label>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingCPU3" name="update_cpu3" value="<?php echo $_SESSION["profile_cpu3"]; ?>" placeholder="example">
												<label for="floatingCPU3">RAM Support Level (DDR 4)</label>
											</div>
										</div>
										<div class="col-lg-2">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingCPU4" name="update_cpu4" value="<?php echo $_SESSION["profile_cpu4"]; ?>" placeholder="example">
												<label for="floatingCPU4">Clock Speed</label>
											</div>
										</div>
										<div class="col-2 mb-3">
											<button type="submit" class="btn btn-primary" name="profile_updatecpu">Update</button>
										</div>
										
										<hr>
										
										<div class="col-12">
											<label for="floatingGPU" class="form-label">GPU: <?php echo $_SESSION["profile_gpu1"]; ?> | <?php echo $_SESSION["profile_gpu2"]; ?> | <?php echo $_SESSION["profile_gpu3"]; ?> | <?php echo $_SESSION["profile_gpu4"]; ?></label>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingGPU1" name="update_gpu1" value="<?php echo $_SESSION["profile_gpu1"]; ?>" placeholder="example">
												<label for="floatingGPU1">Brand Model</label>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingGPU2" name="update_gpu2" value="<?php echo $_SESSION["profile_gpu2"]; ?>" placeholder="example">
												<label for="floatingGPU3">Clock Speed</label>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingGPU3" name="update_gpu3" value="<?php echo $_SESSION["profile_gpu3"]; ?>" placeholder="example">
												<label for="floatingGPU3">Memory Type (GDDR 4)</label>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingGPU4" name="update_gpu4" value="<?php echo $_SESSION["profile_gpu4"]; ?>" placeholder="example">
												<label for="floatingGPU4">VRAM Capacity</label>
											</div>
										</div>
										<div class="col-2 mb-3">
											<button type="submit" class="btn btn-primary" name="profile_updategpu">Update</button>
										</div>
										
										<hr>
										
										<div class="col-12">
											<label for="floatingRAM" class="form-label">RAM: <?php echo $_SESSION["profile_ram1"]; ?> | <?php echo $_SESSION["profile_ram2"]; ?> | <?php echo $_SESSION["profile_ram3"]; ?> | <?php echo $_SESSION["profile_ram4"]; ?></label>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingRAM1" name="update_ram1" value="<?php echo $_SESSION["profile_ram1"]; ?>" placeholder="example">
												<label for="floatingRAM1">Brand Model</label>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingRAM2" name="update_ram2" value="<?php echo $_SESSION["profile_ram2"]; ?>"placeholder="example">
												<label for="floatingRAM2">Bandwidth</label>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingRAM3" name="update_ram3" value="<?php echo $_SESSION["profile_ram3"]; ?>"placeholder="example">
												<label for="floatingRAM3">Dual Data Rate (DDR 4)</label>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingRAM4" name="update_ram4" value="<?php echo $_SESSION["profile_ram4"]; ?>"placeholder="example">
												<label for="floatingRAM4">Capacity</label>
											</div>
										</div>
										<div class="col-2 mb-3">
											<button type="submit" class="btn btn-primary" name="profile_updateram">Update</button>
										</div>
										
										<hr>
										
										<div class="col-12">
											<label for="floatingStorage" class="form-label">Storage: <?php echo $_SESSION["profile_store1"]; ?> | <?php echo $_SESSION["profile_store2"]; ?> | <?php echo $_SESSION["profile_store3"]; ?> | <?php echo $_SESSION["profile_store4"]; ?></label>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingStore1" name="update_store1" value="<?php echo $_SESSION["profile_store1"]; ?>" placeholder="example">
												<label for="floatingStore1">Brand</label>
											</div>
										</div>
										<div class="col-lg-2">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingStore2" name="update_store2" value="<?php echo $_SESSION["profile_store2"]; ?>" placeholder="example">
												<label for="floatingStore1">Type</label>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingStore3" name="update_store3" value="<?php echo $_SESSION["profile_store3"]; ?>" placeholder="example">
												<label for="floatingStore3">PCIExp Level (Gen 3)</label>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingStore4" name="update_store4" value="<?php echo $_SESSION["profile_store4"]; ?>" placeholder="example">
												<label for="floatingStore4">Capacity</label>
											</div>
										</div>
										<div class="col-2 mb-3">
											<button type="submit" class="btn btn-primary" name="profile_updatestore">Update</button>
										</div>
										
										<hr>
										
										<div class="col-12">
											<label for="floatingCooler" class="form-label">Cooler: <?php echo $_SESSION["profile_cool1"]; ?> | <?php echo $_SESSION["profile_cool2"]; ?> | <?php echo $_SESSION["profile_cool3"]; ?> | <?php echo $_SESSION["profile_cool4"]; ?></label>
										</div>
										<div class="col-lg-2">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingCool1" name="update_cool1" value="<?php echo $_SESSION["profile_cool1"]; ?>" placeholder="example">
												<label for="floatingCool1">Brand</label>
											</div>
										</div>
										<div class="col-lg-2">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingCool2" name="update_cool2" value="<?php echo $_SESSION["profile_cool2"]; ?>" placeholder="example">
												<label for="floatingCool2">Type (Air)</label>
											</div>
										</div>
										<div class="col-lg-5">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingCool3" name="update_cool3" value="<?php echo $_SESSION["profile_cool3"]; ?>"placeholder="example">
												<label for="floatingCool3">Dimensions</label>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingCool4" name="update_cool4" value="<?php echo $_SESSION["profile_cool4"]; ?>"placeholder="example">
												<label for="floatingCool4">Cooling Capacity (105<sup>o</sup>)</label>
											</div>
										</div>
										<div class="col-2 mb-3">
											<button type="submit" class="btn btn-primary" name="profile_updatecool">Update</button>
										</div>
										
										<hr>
										
										<div class="col-12">
											<label for="floatingFan" class="form-label">Fans: <?php echo $_SESSION["profile_fan1"]; ?> | <?php echo $_SESSION["profile_fan2"]; ?> | <?php echo $_SESSION["profile_fan3"]; ?> | <?php echo $_SESSION["profile_fan4"]; ?></label>
										</div>
										<div class="col-lg-2">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingFan1" name="update_fan1" value="<?php echo $_SESSION["profile_fan1"]; ?>" placeholder="example">
												<label for="floatingFan1">Brand Model</label>
											</div>
										</div>
										<div class="col-lg-2">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingFan2" name="update_fan2" value="<?php echo $_SESSION["profile_fan2"]; ?>" placeholder="example">
												<label for="floatingFan2">Air Flow (35 Ft)</label>
											</div>
										</div>
										<div class="col-lg-5">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingFan3" name="update_fan3" value="<?php echo $_SESSION["profile_fan3"]; ?>" placeholder="example">
												<label for="floatingFan3">Fan Dimensions</label>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingFan4" name="update_fan4" value="<?php echo $_SESSION["profile_fan4"]; ?>" placeholder="example">
												<label for="floatingFan4">Bearing Type</label>
											</div>
										</div>
										<div class="col-2 mb-3">
											<button type="submit" class="btn btn-primary" name="profile_updatefan">Update</button>
										</div>
										
										<hr>
										
										<div class="col-12">
											<label for="floatingPowerSupply" class="form-label">Power Supply: <?php echo $_SESSION["profile_ps1"]; ?> | <?php echo $_SESSION["profile_ps2"]; ?> | <?php echo $_SESSION["profile_ps3"]; ?> | <?php echo $_SESSION["profile_ps4"]; ?></label>
										</div>
										<div class="col-lg-4">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingPS1" name="update_ps1" value="<?php echo $_SESSION["profile_ps1"]; ?>" placeholder="example">
												<label for="floatingPS1">Brand Model</label>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingPS2" name="update_ps2" value="<?php echo $_SESSION["profile_ps2"]; ?>" placeholder="example">
												<label for="floatingPS2">Form Factor (ATX)</label>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingPS3" name="update_ps3" value="<?php echo $_SESSION["profile_ps3"]; ?>" placeholder="example">
												<label for="floatingPS3">80 Plus Certification</label>
											</div>
										</div>
										<div class="col-lg-2">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingPS4" name="update_ps4" value="<?php echo $_SESSION["profile_ps4"]; ?>" placeholder="example">
												<label for="floatingPS4">Wattage</label>
											</div>
										</div>
										<div class="col-2 mb-3">
											<button type="submit" class="btn btn-primary" name="profile_updateps">Update</button>
										</div>
										
										<hr>
										
										<div class="col-12">
											<label for="floatingCase" class="form-label">Case: <?php echo $_SESSION["profile_case1"]; ?> | <?php echo $_SESSION["profile_case2"]; ?> | <?php echo $_SESSION["profile_case3"]; ?> | <?php echo $_SESSION["profile_case4"]; ?></label>
										</div>
										<div class="col-lg-2">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingCase1" name="update_case1" value="<?php echo $_SESSION["profile_case1"]; ?>" placeholder="example">
												<label for="floatingCase1">Brand</label>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingCase2" name="update_case2" value="<?php echo $_SESSION["profile_case2"]; ?>" placeholder="example">
												<label for="floatingCase2">Case Size (Full)</label>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingCase3" name="update_case3" value="<?php echo $_SESSION["profile_case3"]; ?>" placeholder="example">
												<label for="floatingCase3">Cable Management Space</label>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingCase4" name="update_case4" value="<?php echo $_SESSION["profile_case4"]; ?>" placeholder="example">
												<label for="floatingCase4">In-Built IO Shields</label>
											</div>
										</div>
										<div class="col-2">
											<button type="submit" class="btn btn-primary" name="profile_updatecase">Update</button>
										</div>
										
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
		<!-- ____________________________________________________________________________________________________________________ -->		
				
				<div class="modal" id="settings_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="settingsButtonLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="staticBackdropLabel">Account Settings</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form method="POST" class="row">
								
									<div class="col-12">
										<label for="floatingEmail" class="form-label">Email: <?php echo $_SESSION["user_email"]; ?></label>
									</div>
									<div class="col-9">
										<div class="form-floating mb-3">
											<input type="email" class="form-control" id="floatingEmail" minlength="5" maxlength="20" name="update_email" placeholder="example" required>
											<label for="floatingEmail">Email address</label>
										</div>
									</div>
									<div class="col-2">
										<button type="submit" class="btn btn-primary" name="profile_updateemail">Update</button>
									</div>
								</form>
								
								<hr>
								
								<form method="POST" class="row">
									<div class="col-12">
										<label for="floatingUsername" class="form-label">Username: <?php echo $_SESSION["user_name"]; ?></label>
									</div>
									<div class="col-9">
										<div class="form-floating mb-3">
											<input type="text" class="form-control" id="floatingUsername" pattern="[A-Za-z0-9 ]+" minlength="5" maxlength="20" name="update_username" placeholder="example" required>
											<label for="floatingUsername">Username</label>
										</div>
									</div>
									<div class="col-2">
										<button type="submit" class="btn btn-primary" name="profile_updateusername">Update</button>
									</div>
								</form>
								
								<hr>
								
								<form method="POST" class="row">	
									<div class="col-12">
										<div class="form-floating mb-3">
											<input type="password" class="form-control" id="floatingPassword" minlength="7" maxlength="15" name="update_pass" placeholder="example" required>
											<label for="floatingPassword">Password</label>
										</div>
									</div>
									<div class="col-9">
										<div class="form-floating">
											<input type="password" class="form-control" id="floatingConfirmPassword" minlength="7" maxlength="15" name="update_pass2" placeholder="example" required>
											<label for="floatingConfirmPassword">Confirm Password</label>
										</div>
									</div>
									<div class="col-2">
										<button type="submit" class="btn btn-primary" name="profile_updatepassword">Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
		
		<!-- ____________________________________________________________________________________________________________________ -->
		
				<div class="modal" id="feedback_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="feedbackButtonLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="staticBackdropLabel">Please share your feedback</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<form method="POST">
								<div class="modal-body">
									<textarea class="form-control" id="feedbackFormControlTextarea" rows="4" name="feedback_formdata" required></textarea>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary" name="submit_feedback">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
		
		<!-- ____________________________________________________________________________________________________________________ -->
				
				<div class="col-lg-6 mb-3">
					<div class="dashboard_content_primary box-shadow">
						<div>
							<form method="GET">
								<button class="btn btn-primary col-12 new_request_btn" type="submit" name="submit_newrec">New Recommendation</button>
							</form>
						</div>
						<div class="container-lg mt-2 mb-2 dashboard_content_reclist">
						<!--PULL THIS FROM DATABASE --------------------------------->
							<?php require "../backend/displayreclog_logic.php"; ?>
						<!----------------------------------------------------------->
						</div>
					</div>
				</div>
				
				<div class="col-lg-4">
					<div class="dashboard_content_secondary box-shadow">
						<div class="container-lg pt-3">
							<h5>Ads</h5>
						</div>
						<hr>
						<div class="container-lg card_holder">
							<div class="card mb-3 card_content">
								<div class="card-body">
									<h5 class="card-title">$500 Gaming</h5>
									<h6 class="card-subtitle mb-2 text-muted">The budget gaming PC is back.</h6>
									<p class="card-text">With the decline of the crypto market, crypto miners are dumping all thei...
									<a href="#" class="card-link">Watch Video</a>
									<!--<a href="#" class="card-link">Another link</a>-->
								</div>
							</div>
							<div class="card card_content">
								<div class="card-header">
									Featured
								</div>
								<div class="card-body">
									<h5 class="card-title">Announcement</h5>
									<p class="card-text">Awesome new PC peripherals. Check out our curated list.</p>
									<a href="#" class="btn btn-primary">View</a>
								</div>
							</div>
						</div>
					</div>
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