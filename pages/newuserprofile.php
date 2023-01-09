<?php
	require "../backend/core_logic.php";
	require "../backend/profilesave_logic.php";
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>IntuitBuild: New User</title>
		
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
				<!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!--<div class="collapse navbar-collapse" id="navbarSupportedContent">-->
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					</ul>
					<form method="GET" class="d-flex login_box newuser_loginbox" role="logout">
						<!--<button class="btn btn-outline-primary" type="submit" name="submit_logout">LOGOUT</button>-->
					</form>
				<!--</div>-->
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
					<p>Welcome, <?php echo $_SESSION["user_name"]; ?>. Please create your system profile.</p>
				</div>
				
				<div class="col-1">
				</div>
			
			</div>
			
		<!-- ____________________________________________________________________________________________________________________ -->
			
			<form method="POST">
				<div class="row sign-up_content_box box-shadow">
					
					<div class="col-12 mt-3">
						<label for="floatingMotherboard" class="form-label">Motherboard</label>
					</div>
					<div class="col-md-4">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingMB1" name="profile_mb1" placeholder="example">
							<label for="floatingMB1">Brand Name</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingMB2" name="profile_mb2" placeholder="example">
							<label for="floatingMB2">Model</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingMB3" name="profile_mb3" placeholder="example">
							<label for="floatingMB3">Instruction Set</label>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingMB4" name="profile_mb4" placeholder="example">
							<label for="floatingMB4">Sockets</label>
						</div>
					</div>
					
					<hr>
					
					<div class="col-12">
						<label for="floatingCPU" class="form-label">CPU</label>
					</div>
					<div class="col-md-4">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingCPU1" name="profile_cpu1" placeholder="example">
							<label for="floatingCPU1">Model</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingCPU2" name="profile_cpu2" placeholder="example">
							<label for="floatingCPU2">SoC Size</label>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingCPU3" name="profile_cpu3" placeholder="example">
							<label for="floatingCPU3">TDP</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingCPU4" name="profile_cpu4" placeholder="example">
							<label for="floatingCPU4">Clock Speed</label>
						</div>
					</div>
					
					<hr>
					
					<div class="col-12">
						<label for="floatingGPU" class="form-label">GPU</label>
					</div>
					<div class="col-md-4">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingGPU1" name="profile_gpu1" placeholder="example">
							<label for="floatingGPU1">Brand</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingGPU2" name="profile_gpu2" placeholder="example">
							<label for="floatingGPU3">Model</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingGPU3" name="profile_gpu3" placeholder="example">
							<label for="floatingGPU3">VRAM Capacity</label>
						</div>
					</div>
					
					<hr>
					
					<div class="col-12">
						<label for="floatingRAM" class="form-label">RAM</label>
					</div>
					<div class="col-md-3">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingRAM1" name="profile_ram1" placeholder="example">
							<label for="floatingRAM1">Brand</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingRAM2" name="profile_ram2" placeholder="example">
							<label for="floatingRAM2">Access Speed</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingRAM3" name="profile_ram3" placeholder="example">
							<label for="floatingRAM3">Channel Scheme</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingRAM4" name="profile_ram4" placeholder="example">
							<label for="floatingRAM4">Capacity</label>
						</div>
					</div>
					
					<hr>
					
					<div class="col-12">
						<label for="floatingStorage" class="form-label">Storage</label>
					</div>
					<div class="col-md-4">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingStore1" name="profile_store1" placeholder="example">
							<label for="floatingStore1">Brand</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingStore2" name="profile_store2" placeholder="example">
							<label for="floatingStore1">Type</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingStore3" name="profile_store3" placeholder="example">
							<label for="floatingStore3">Generation</label>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingStore4" name="profile_store4" placeholder="example">
							<label for="floatingStore4">Capacity</label>
						</div>
					</div>
					
					<hr>
					
					<div class="col-12">
						<label for="floatingCooler" class="form-label">Cooler</label>
					</div>
					<div class="col-md-4">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingCool1" name="profile_cool1" placeholder="example">
							<label for="floatingCool1">Brand</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingCool2" name="profile_cool2" placeholder="example">
							<label for="floatingCool2">Type</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingCool3" name="profile_cool3" placeholder="example">
							<label for="floatingCool3">Size</label>
						</div>
					</div>
					
					<hr>
					
					<div class="col-12">
						<label for="floatingFan" class="form-label">Fans</label>
					</div>
					<div class="col-md-4">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingFan1" name="profile_fan1" placeholder="example">
							<label for="floatingFan1">Brand</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingFan2" name="profile_fan2" placeholder="example">
							<label for="floatingFan2">Dimensions</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingFan3" name="profile_fan3" placeholder="example">
							<label for="floatingFan3">RPM</label>
						</div>
					</div>
					
					<hr>
					
					<div class="col-12">
						<label for="floatingPowerSupply" class="form-label">Power Supply</label>
					</div>
					<div class="col-md-4">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingPS1" name="profile_ps1" placeholder="example">
							<label for="floatingPS1">Brand</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingPS2" name="profile_ps2" placeholder="example">
							<label for="floatingPS2">Wattage</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingPS3" name="profile_ps3" placeholder="example">
							<label for="floatingPS3">Connector Count</label>
						</div>
					</div>
					
					<hr>
					
					<div class="col-12">
						<label for="floatingCase" class="form-label">Case</label>
					</div>
					<div class="col-md-3">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingCase1" name="profile_case1" placeholder="example">
							<label for="floatingCase1">Brand</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingCase2" name="profile_case2" placeholder="example">
							<label for="floatingCase2">Form Factor</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingCase3" name="profile_case3" placeholder="example">
							<label for="floatingCase3">Enclosure</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingCase4" name="profile_case4" placeholder="example">
							<label for="floatingCase4">Material</label>
						</div>
					</div>
					
					<div class="col-6"></div>
					<div class="col-3 mb-3">
						<button type="submit" class="btn btn-primary col-12" name="submit_profile">Accept</button>
					</div>
					<div class="col-3 mb-3">
						<button type="submit" class="btn btn-primary col-12" name="submit_skipnew">Skip</button>
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