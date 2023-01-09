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
		<title>IntuitBuild: Management</title>
		
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
								<button class="btn btn-light" type="submit" name="submit_home">Home</button>
								<button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#profile_modal">Profile</button>
								<button class="btn btn-primary" type="button" name="submit_management">Management</button>
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
				
				<div class="col-lg-10">
					<div class="row">
						<div class="col-lg mb-3">
							<div class="container-lg pt-2 pb-3 manage_box box-shadow">
							
								<h5>Components Management</h5>
								<hr>
								<div class="d-grid gap-2 d-lg-flex justify-content-lg-center">
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#managemb_modal">Motherboard</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#managecpu_modal">CPU</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#managegpu_modal">GPU</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#manageram_modal">RAM</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#managestore_modal">Storage</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#managecool_modal">Cooler</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#managefan_modal">Fan</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#manageps_modal">Power Supply</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#managecase_modal">Case</button>
								</div>
								
							</div>
						</div>
					</div>
					
		<!-- ____________________________________________________________________________________________________________________ -->
					
					<div class="row">
						<div class="col-lg-7 mb-3">
							<div class="container-lg pt-2 pb-3 manage_box box-shadow">
						
								<h5>User Management</h5>
								<hr>
								<div class="container-lg manage_box_userlist">
									<?php require "../backend/userlog_logic.php"; ?>
								</div>
								<hr>
								<div class="d-grid gap-2 d-lg-flex justify-content-lg-center">
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#manage_useradd_modal">Add User</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#manage_userupdate_modal">Update User</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#manage_userdelete_modal">Delete User</button>
								</div>
								
							</div>
						</div>
		
		<!-- ____________________________________________________________________________________________________________________ -->		
		<!-- MODALS FOR MANAGEMENT BUTTONS -->
		
						<div class="modal" id="managemb_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ManageMBButtonLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Motherboard List</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="container-lg manage_box_complist">
											<?php require "../backend/managemblog_logic.php"; ?>
										</div>
										<hr>
										<form method="POST">
											<div class="input d-grid gap-1 d-lg-flex justify-content-lg-center mb-1">
												<input type="text" class="form-control" name="mbprop1" placeholder="Model" aria-label="Model" aria-describedby="basic-addon1" maxlength=20 required>
												<select class="form-select" name="mbprop2" aria-label="Form Factor" required>
													<option selected>Form Factor</option>
													<option value="ATX">ATX</option>
													<option value="MicroATX">MicroATX</option>
													<option value="Mini-ITX">Mini-ITX</option>
												</select>
												<input type="text" class="form-control" name="mbprop3" placeholder="Socket Type" aria-label="Socket Type" aria-describedby="basic-addon1" required>
												<input type="number" class="form-control" name="mbprop4" placeholder="RAM Slots" aria-label="RAM Slots" aria-describedby="basic-addon1" required>
												<select class="form-select" name="mbprop5" aria-label="Memory Support" required>
													<option selected>Memory Support</option>
													<option value="DDR2">DDR2</option>
													<option value="DDR3">DDR3</option>
													<option value="DDR4">DDR4</option>
													<option value="DDR5">DDR5</option>
												</select>
												<select class="form-select" name="mbpropweight" aria-label="Tier Selection" required>
													<option selected>Tier</option>
													<option value="Low">Low</option>
													<option value="Mid">Mid</option>
													<option value="High">High</option>
												</select>
												<input type="number" class="form-control" name="mbpropprice" placeholder="Price" aria-label="Price" aria-describedby="basic-addon1" required>
												<input type="text" class="form-control" name="mbproplink" placeholder="Link" aria-label="Link" aria-describedby="basic-addon1">
											</div>
											<button type="submit" class="btn btn-primary" name="submit_addmb">Add</button>
										</form>
										<hr>
										<form method="POST">
											<div class="input-group">
												<input type="number" class="form-control" name="mbid" placeholder="Motherboard ID" aria-label="Motherboard ID" aria-describedby="basic-addon1" required>
												<button type="submit" class="btn btn-primary" name="submit_deletemb">Delete</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
						<div class="modal" id="managecpu_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ManageCPUButtonLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">CPU List</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="container-lg manage_box_complist">
											<?php require "../backend/managecpulog_logic.php"; ?>
										</div>
										<hr>
										<form method="POST">
											<div class="input d-grid gap-1 d-lg-flex justify-content-lg-center mb-1">
												<input type="text" class="form-control" name="cpuprop1" placeholder="Model" aria-label="Model" aria-describedby="basic-addon1" maxlength=20 required>
												<input type="text" class="form-control" name="cpuprop2" placeholder="CPU Socket" aria-label="CPU Socket" aria-describedby="basic-addon1" required>
												<input type="number" step="0.01" class="form-control" name="cpuprop3" placeholder="Clock Speed" aria-label="Clock Speed" aria-describedby="basic-addon1" required>
												<input type="number" class="form-control" name="cpuprop4" placeholder="Core Count" aria-label="Core Count" aria-describedby="basic-addon1" required>
												<input type="number" class="form-control" name="cpuprop5" placeholder="TjMax" aria-label="TjMax" aria-describedby="basic-addon1" required>
												<select class="form-select" name="cpupropweight" aria-label="Tier Selection" required>
													<option selected>Tier</option>
													<option value="Low">Low</option>
													<option value="Mid">Mid</option>
													<option value="High">High</option>
												</select>
												<input type="number" class="form-control" name="cpupropprice" placeholder="Price" aria-label="Price" aria-describedby="basic-addon1" required>
												<input type="text" class="form-control" name="cpuproplink" placeholder="Link" aria-label="Link" aria-describedby="basic-addon1">
											</div>
											<button type="submit" class="btn btn-primary" name="submit_addcpu">Add</button>
										</form>
										<hr>
										<form method="POST">
											<div class="input-group">
												<input type="number" class="form-control" name="cpuid" placeholder="CPU ID" aria-label="CPU ID" aria-describedby="basic-addon1" required>
												<button type="submit" class="btn btn-primary" name="submit_deletecpu">Delete</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
						<div class="modal" id="managegpu_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ManageGPUButtonLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">GPU List</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="container-lg manage_box_complist">
											<?php require "../backend/managegpulog_logic.php"; ?>
										</div>
										<hr>
										<form method="POST">
											<div class="input d-grid gap-1 d-lg-flex justify-content-lg-center mb-1">
												<input type="text" class="form-control" name="gpuprop1" placeholder="Model" aria-label="Model" aria-describedby="basic-addon1" maxlength=20 required>
												<input type="number" class="form-control" name="gpuprop2" placeholder="Clock Speed" aria-label="Clock Speed" aria-describedby="basic-addon1" required>
												<select class="form-select" name="gpuprop3" aria-label="Memory Type" required>
													<option selected>Memory Type</option>
													<option value="GDDR4">GDDR4</option>
													<option value="GDDR5">GDDR5</option>
													<option value="GDDR5x">GDDR5x</option>
													<option value="GDDR6">GDDR6</option>
													<option value="GDDR6x">GDDR6x</option>
												</select>
												<input type="number" class="form-control" name="gpuprop4" placeholder="VRAM Capacity" aria-label="VRAM Capacity" aria-describedby="basic-addon1" required>
												<input type="number" step="0.01" class="form-control" name="gpuprop5" placeholder="TFLOPS" aria-label="TFLOPS" aria-describedby="basic-addon1" required>
												<select class="form-select" name="gpupropweight" aria-label="Tier Selection" required>
													<option selected>Tier</option>
													<option value="Low">Low</option>
													<option value="Mid">Mid</option>
													<option value="High">High</option>
												</select>
												<input type="text" class="form-control" name="gpupropprice" placeholder="Price" aria-label="Price" aria-describedby="basic-addon1" required>
												<input type="text" class="form-control" name="gpuproplink" placeholder="Link" aria-label="Link" aria-describedby="basic-addon1">
											</div>
											<button type="submit" class="btn btn-primary" name="submit_addgpu">Add</button>
										</form>
										<hr>
										<form method="POST">
											<div class="input-group">
												<input type="number" class="form-control" name="gpuid" placeholder="GPU ID" aria-label="GPU ID" aria-describedby="basic-addon1" required>
												<button type="submit" class="btn btn-primary" name="submit_deletegpu">Delete</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
						<div class="modal" id="manageram_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ManageRAMButtonLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">RAM List</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="container-lg manage_box_complist">
											<?php require "../backend/manageramlog_logic.php"; ?>
										</div>
										<hr>
										<form method="POST">
											<div class="input d-grid gap-1 d-lg-flex justify-content-lg-center mb-1">
												<input type="text" class="form-control" name="ramprop1" placeholder="Model" aria-label="Model" aria-describedby="basic-addon1" maxlength=20 required>
												<select class="form-select" name="ramprop2" aria-label="Memory Type" required>
													<option selected>Memory Type</option>
													<option value="DDR2">DDR2</option>
													<option value="DDR3">DDR3</option>
													<option value="DDR4">DDR4</option>
													<option value="DDR5">DDR5</option>
												</select>
												<input type="number" class="form-control" name="ramprop3" placeholder="Memory Size" aria-label="Memory Size" aria-describedby="basic-addon1" required>
												<select class="form-select" name="ramprop4" aria-label="Error Correction" required>
													<option selected>Error Correction</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
												<input type="number" class="form-control" name="ramprop5" placeholder="Memory Speed" aria-label="Memory Speed" aria-describedby="basic-addon1" required>
												<select class="form-select" name="rampropweight" aria-label="Tier Selection" required>
													<option selected>Tier</option>
													<option value="Low">Low</option>
													<option value="Mid">Mid</option>
													<option value="High">High</option>
												</select>
												<input type="text" class="form-control" name="rampropprice" placeholder="Price" aria-label="Price" aria-describedby="basic-addon1" required>
												<input type="text" class="form-control" name="ramproplink" placeholder="Link" aria-label="Link" aria-describedby="basic-addon1">
											</div>
											<button type="submit" class="btn btn-primary" name="submit_addram">Add</button>
										</form>
										<hr>
										<form method="POST">
											<div class="input-group">
												<input type="number" class="form-control" name="ramid" placeholder="RAM ID" aria-label="RAM ID" aria-describedby="basic-addon1" required>
												<button type="submit" class="btn btn-primary" name="submit_deleteram">Delete</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
						<div class="modal" id="managestore_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ManageStorageButtonLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Storage List</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="container-lg manage_box_complist">
											<?php require "../backend/managestolog_logic.php"; ?>
										</div>
										<hr>
										<form method="POST">
											<div class="input d-grid gap-1 d-lg-flex justify-content-lg-center mb-1">
												<input type="text" class="form-control" name="storeprop1" placeholder="Model" aria-label="Model" aria-describedby="basic-addon1" maxlength=20 required>
												<select class="form-select" name="storeprop2" aria-label="Tier Selection" required>
													<option selected>Type</option>
													<option value="HDD">HDD</option>
													<option value="SSD">SSD</option>
												</select>
												<input type="number" class="form-control" name="storeprop3" placeholder="RPM" aria-label="RPM" aria-describedby="basic-addon1" required>
												<input type="number" class="form-control" name="storeprop4" placeholder="Capacity" aria-label="Capacity" aria-describedby="basic-addon1" required>
												<input type="number" class="form-control" name="storeprop5" placeholder="Data Transfer Rate" aria-label="Data Transfer Rate" aria-describedby="basic-addon1" required>
												<select class="form-select" name="storepropweight" aria-label="Tier Selection" required>
													<option selected>Tier</option>
													<option value="Low">Low</option>
													<option value="Mid">Mid</option>
													<option value="High">High</option>
												</select>
												<input type="text" class="form-control" name="storepropprice" placeholder="Price" aria-label="Price" aria-describedby="basic-addon1" required>
												<input type="text" class="form-control" name="storeproplink" placeholder="Link" aria-label="Link" aria-describedby="basic-addon1">
											</div>
											<button type="submit" class="btn btn-primary" name="submit_addstore">Add</button>
										</form>
										<hr>
										<form method="POST">
											<div class="input-group">
												<input type="number" class="form-control" name="storeid" placeholder="Storage ID" aria-label="Storage ID" aria-describedby="basic-addon1" required>
												<button type="submit" class="btn btn-primary" name="submit_deletestore">Delete</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
						<div class="modal" id="managecool_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ManageCoolerButtonLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Cooler List</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="container-lg manage_box_complist">
											<?php require "../backend/manageclrlog_logic.php"; ?>
										</div>
										<hr>
										<form method="POST">
											<div class="input d-grid gap-1 d-lg-flex justify-content-lg-center mb-1">
												<input type="text" class="form-control" name="coolprop1" placeholder="Model" aria-label="Model" aria-describedby="basic-addon1" maxlength=20 required>
												<select class="form-select" name="coolprop2" aria-label="Type" required>
													<option selected>Type</option>
													<option value="Air">Air</option>
													<option value="Water">Liquid</option>
												</select>
												<input type="text" class="form-control" name="coolprop3" placeholder="Dimensions" aria-label="Dimensions" aria-describedby="basic-addon1" required>
												<select class="form-select" name="coolprop4" aria-label="Socket Compatibility" required>
													<option selected>Socket Compatibility</option>
													<option value="Intel">Intel</option>
													<option value="AMD">AMD</option>
													<option value="Intel/AMD">Intel/AMD</option>
												</select>
												<input type="text" class="form-control" name="coolprop5" placeholder="Radiator Dimensions" aria-label="Radiator Dimensions" aria-describedby="basic-addon1" required>
												<select class="form-select" name="coolpropweight" aria-label="Tier Selection" required>
													<option selected>Tier</option>
													<option value="Low">Low</option>
													<option value="Mid">Mid</option>
													<option value="High">High</option>
												</select>
												<input type="text" class="form-control" name="coolpropprice" placeholder="Price" aria-label="Price" aria-describedby="basic-addon1" required>
												<input type="text" class="form-control" name="coolproplink" placeholder="Link" aria-label="Link" aria-describedby="basic-addon1">
											</div>
											<button type="submit" class="btn btn-primary" name="submit_addcool">Add</button>
										</form>
										<hr>
										<form method="POST">
											<div class="input-group">
												<input type="number" class="form-control" name="coolid" placeholder="Cooler ID" aria-label="Cooler ID" aria-describedby="basic-addon1" required>
												<button type="submit" class="btn btn-primary" name="submit_deletecool">Delete</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
						<div class="modal" id="managefan_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ManageFanButtonLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Fan List</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="container-lg manage_box_complist">
											<?php require "../backend/managefanlog_logic.php"; ?>
										</div>
										<hr>
										<form method="POST">
											<div class="input d-grid gap-1 d-lg-flex justify-content-lg-center mb-1">
												<input type="text" class="form-control" name="fanprop1" placeholder="Model" aria-label="Model" aria-describedby="basic-addon1" maxlength=20 required>
												<input type="number" step="0.01" class="form-control" name="fanprop2" placeholder="Air Flow (CFM)" aria-label="Air Flow (CFM)" aria-describedby="basic-addon1" required>
												<input type="number" class="form-control" name="fanprop3" placeholder="Fan Size" aria-label="Fan Size" aria-describedby="basic-addon1" required>
												<input type="number" step="0.01" class="form-control" name="fanprop4" placeholder="Noise Level" aria-label="Noise Level" aria-describedby="basic-addon1" required>
												<select class="form-select" name="fanprop5" aria-label="Bearing Type" required>
													<option selected>Bearing Type</option>
													<option value="Sleeve">Sleeve</option>
													<option value="Ball Bearing">Ball Bearing</option>
													<option value="Dual Ball">Dual Ball</option>
													<option value="Hydraulic Bearing">Hydraulic Bearing</option>
													<option value="Fluid Dynamic">Fluid Dynamic</option>
												</select>
												<select class="form-select" name="fanpropweight" aria-label="Tier Selection" required>
													<option selected>Tier</option>
													<option value="Low">Low</option>
													<option value="Mid">Mid</option>
													<option value="High">High</option>
												</select>
												<input type="text" class="form-control" name="fanpropprice" placeholder="Price" aria-label="Price" aria-describedby="basic-addon1" required>
												<input type="text" class="form-control" name="fanproplink" placeholder="Link" aria-label="Link" aria-describedby="basic-addon1">
											</div>
											<button type="submit" class="btn btn-primary" name="submit_addfan">Add</button>
										</form>
										<hr>
										<form method="POST">
											<div class="input-group">
												<input type="number" class="form-control" name="fanid" placeholder="Fan ID" aria-label="Fan ID" aria-describedby="basic-addon1" required>
												<button type="submit" class="btn btn-primary" name="submit_deletefan">Delete</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
						<div class="modal" id="manageps_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ManagePSButtonLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Power Supply List</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="container-lg manage_box_complist">
											<?php require "../backend/managepslog_logic.php"; ?>
										</div>
										<hr>
										<form method="POST">
											<div class="input d-grid gap-1 d-lg-flex justify-content-lg-center mb-1">
												<input type="text" class="form-control" name="psprop1" placeholder="Model" aria-label="Model" aria-describedby="basic-addon1" maxlength=20 required>
												<select class="form-select" name="psprop2" aria-label="Form Factor" required>
													<option selected>Form Factor</option>
													<option value="ATX">ATX</option>
													<option value="ITX">ITX/Mini ITX</option>
												</select>
												<input type="number" class="form-control" name="psprop3" placeholder="Wattage" aria-label="Wattage" aria-describedby="basic-addon1" required>
												<select class="form-select" name="psprop4" aria-label="80 Plus Certification" required>
													<option selected>80 Plus Certification</option>
													<option value="Standard">Standard</option>
													<option value="Bronze">Bronze</option>
													<option value="Silver">Silver</option>
													<option value="Gold">Gold</option>
													<option value="Platinum">Platinum</option>
													<option value="Titaninum">Titaninum</option>
												</select>
												<select class="form-select" name="psprop5" aria-label="Modular" required>
													<option selected>Modular</option>
													<option value="Full">Full</option>
													<option value="Semi">Semi</option>
													<option value="Non">Non</option>
												</select>
												<select class="form-select" name="pspropweight" aria-label="Tier Selection" required>
													<option selected>Tier</option>
													<option value="Low">Low</option>
													<option value="Mid">Mid</option>
													<option value="High">High</option>
												</select>
												<input type="text" class="form-control" name="pspropprice" placeholder="Price" aria-label="Price" aria-describedby="basic-addon1" required>
												<input type="text" class="form-control" name="psproplink" placeholder="Link" aria-label="Link" aria-describedby="basic-addon1">
											</div>
											<button type="submit" class="btn btn-primary" name="submit_addps">Add</button>
										</form>
										<hr>
										<form method="POST">
											<div class="input-group">
												<input type="number" class="form-control" name="psid" placeholder="Power Supply ID" aria-label="Power Supply ID" aria-describedby="basic-addon1" required>
												<button type="submit" class="btn btn-primary" name="submit_deleteps">Delete</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
						<div class="modal" id="managecase_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ManageCaseButtonLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Case List</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="container-lg manage_box_complist">
											<?php require "../backend/managecaslog_logic.php"; ?>
										</div>
										<hr>
										<form method="POST">
											<div class="input d-grid gap-1 d-lg-flex justify-content-lg-center mb-1">
												<input type="text" class="form-control" name="caseprop1" placeholder="Model" aria-label="Model" aria-describedby="basic-addon1" maxlength=20 required>
												<select class="form-select" name="caseprop2" aria-label="Type" required>
													<option selected>Type</option>
													<option value="Full">Full</option>
													<option value="Middle">Middle</option>
													<option value="Cube">Cube</option>
													<option value="Micro">Micro</option>
													<option value="Mini">Mini</option>
												</select>
												<select class="form-select" name="caseprop3" aria-label="Cable Man. Support" required>
													<option selected>Cable Man. Support</option>
													<option value="Good">Good</option>
													<option value="Fair">Fair</option>
													<option value="Bad">Bad</option>
												</select>
												<select class="form-select" name="caseprop4" aria-label="Style" required>
													<option selected>Style</option>
													<option value="RGB Heavy">RGB Heavy</option>
													<option value="RGB Reserved">RGB Reserved</option>
													<option value="Stealth">Stealth</option>
												</select>
												<select class="form-select" name="caseprop5" aria-label="Noise Cancellation" required>
													<option selected>Noise Cancellation</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
												<select class="form-select" name="casepropweight" aria-label="Tier Selection" required>
													<option selected>Tier</option>
													<option value="Low">Low</option>
													<option value="Mid">Mid</option>
													<option value="High">High</option>
												</select>
												<input type="text" class="form-control" name="casepropprice" placeholder="Price" aria-label="Price" aria-describedby="basic-addon1" required>
												<input type="text" class="form-control" name="caseproplink" placeholder="Link" aria-label="Link" aria-describedby="basic-addon1">
											</div>
											<button type="submit" class="btn btn-primary" name="submit_addcase">Add</button>
										</form>
										<hr>
										<form method="POST">
											<div class="input-group">
												<input type="number" class="form-control" name="caseid" placeholder="Case ID" aria-label="Case ID" aria-describedby="basic-addon1" required>
												<button type="submit" class="btn btn-primary" name="submit_deletecase">Delete</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
		<!-- ____________________________________________________________________________________________________________________ -->
		
						<div class="modal" id="manage_useradd_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="AdminAddUserLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Add User</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<form method="POST">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="floatingAddUsername" pattern="[A-Za-z0-9 ]+" minlength="5" maxlength="20" name="addname" placeholder="example" required>
												<label for="floatingAddUsername">Username</label>
											</div>
											<div class="form-floating mb-3">
												<input type="email" class="form-control" id="floatingAddEmail" minlength="5" maxlength="20" name="addemail" placeholder="example" required>
												<label for="floatingAddEmail">Email address</label>
											</div>
											<div class="input-group mb-3">
												<span class="input-group-text">User Level</span>
												<select class="form-select" name="addlevel" aria-label="Admin Level Selection" required>
													<option selected value="0">Regular</option>
													<option value="1">Administrator</option>
												</select>
											</div>
											<div class="form-floating mb-3">
												<input type="password" class="form-control" id="floatingAddPassword" minlength="7" maxlength="15" name="addpass" placeholder="example" required>
												<label for="floatingAddPassword">Password</label>
											</div>
											<div class="form-floating mb-3">
												<input type="password" class="form-control" id="floatingAddConfirmPassword" minlength="7" maxlength="15" name="addpass2" placeholder="example" required>
												<label for="floatingAddConfirmPassword">Confirm Password</label>
											</div>
											<div>
												<button type="submit" class="btn btn-primary col-12" name="submit_adduserconfirm">Add User</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
						<div class="modal" id="manage_userupdate_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="AdminUpdateUserLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Update User Details</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<form method="POST">
											<div class="input-group mb-3">
												<input type="number" class="form-control" min="0" name="updateuserunameid" placeholder="User ID" aria-label="User ID" aria-describedby="basic-addon1" required>
												<input type="text" class="form-control" pattern="[A-Za-z0-9 ]+" minlength="5" maxlength="20" name="updateusername" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
												<button type="submit" class="btn btn-primary" name="submit_updateusernameconfirm">Update</button>
											</div>
										</form>
										
										<form method="POST">
											<div class="input-group mb-3">
												<input type="number" class="form-control" min="0" name="updateuseruemailid" placeholder="User ID" aria-label="User ID" aria-describedby="basic-addon1" required>
												<input type="text" class="form-control" minlength="5" maxlength="20" name="updateuseremail" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required>
												<button type="submit" class="btn btn-primary" name="submit_updateuseremailconfirm">Update</button>
											</div>
										</form>
										
										<form method="POST">
											<div class="input-group mb-3">
												<input type="number" class="form-control" min="0" name="updateuserulevelid" placeholder="User ID" aria-label="User ID" aria-describedby="basic-addon1" required>
												<select class="form-select" name="updateuserlevel" aria-label="Admin Level Update" required>
													<option selected value="0">Regular</option>
													<option value="1">Administrator</option>
												</select>
												<button type="submit" class="btn btn-primary" name="submit_updateuserlevelconfirm">Update</button>
											</div>
										</form>
										
										<form method="POST" class="row">
											<div class="col-4">
												<div class="form-floating mb-3">
													<input type="number" class="form-control" id="floatingUpdateUserPasswordID" min="0" name="updateuserupassid" placeholder="example" required>
													<label for="floatingUpdateUserPasswordID">User ID</label>
												</div>
											</div>
											<div class="col-8">
												<div class="form-floating mb-3">
													<input type="password" class="form-control" id="floatingUpdateUserPassword" minlength="7" maxlength="15" name="updateuserpass" placeholder="example" required>
													<label for="floatingUpdateUserPassword">Password</label>
												</div>
											</div>
											<div class="col-9">
												<div class="form-floating mb-3">
													<input type="password" class="form-control" id="floatingUpdateUserConfirmPassword" minlength="7" maxlength="15" name="updateuserpass2" placeholder="example" required>
													<label for="floatingUpdateUserConfirmPassword">Confirm Password</label>
												</div>
											</div>
											<div class="col-2">
												<button type="submit" class="btn btn-primary" name="submit_updateuserpasswordconfirm">Update</button>
											</div>
										</form>
										
									</div>
								</div>
							</div>
						</div>
						
						<div class="modal" id="manage_userdelete_modal" tabindex="-1" aria-labelledby="AdminDeleteUserLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Delete User</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<form method="POST">
										<div class="modal-body">
											<div class="input-group">
												<input type="text" class="form-control" min="0" name="deleteid" placeholder="User ID" aria-label="User ID" aria-describedby="basic-addon1" required>
												<button type="submit" class="btn btn-primary" name="submit_deleteuserconfirm">Delete User</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
		
		<!-- ____________________________________________________________________________________________________________________ -->			
						
						<div class="col-lg-5">
							<div class="container-lg pt-2 pb-3 manage_box box-shadow">
						
								<h5>Feedback Log</h5>
								<hr>
								<div class="container-lg manage_box_feedback">
									<?php require "../backend/feedbacklog_logic.php"; ?>
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