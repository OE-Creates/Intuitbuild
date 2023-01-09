<?php
	//echo "profilesave_logic_script loaded successfully";
	
	if ($_SESSION["user_loggedin"]  == 0)
	{
		header("Location: ../index.php");
		exit();
	}
	
	if (isset($_POST['submit_profile']))
	{
		require 'dbconnect.php';
		
		$uid = $_SESSION["user_id"];
		//Save inputed profile data
		
		//---- Motherboard -------------------------------------------------------
		$profilemb1 = $conn->real_escape_string($_POST['profile_mb1']);
		$profilemb2 = $conn->real_escape_string($_POST['profile_mb2']);
		$profilemb3 = $conn->real_escape_string($_POST['profile_mb3']);
		$profilemb4 = $conn->real_escape_string($_POST['profile_mb4']);
		
		//---- CPU ---------------------------------------------------------------
		$profilecpu1 = $conn->real_escape_string($_POST['profile_cpu1']);
		$profilecpu2 = $conn->real_escape_string($_POST['profile_cpu2']);
		$profilecpu3 = $conn->real_escape_string($_POST['profile_cpu3']);
		$profilecpu4 = $conn->real_escape_string($_POST['profile_cpu4']);
		
		//------------------------------------------------------------------------
		$profilegpu1 = $conn->real_escape_string($_POST['profile_gpu1']);
		$profilegpu2 = $conn->real_escape_string($_POST['profile_gpu2']);
		$profilegpu3 = $conn->real_escape_string($_POST['profile_gpu3']);
		$profilegpu4 = NULL; //$conn->real_escape_string($_POST['profile_gpu4']);
		
		//------------------------------------------------------------------------
		$profileram1 = $conn->real_escape_string($_POST['profile_ram1']);
		$profileram2 = $conn->real_escape_string($_POST['profile_ram2']);
		$profileram3 = $conn->real_escape_string($_POST['profile_ram3']);
		$profileram4 = $conn->real_escape_string($_POST['profile_ram4']);
		
		//------------------------------------------------------------------------
		$profilestore1 = $conn->real_escape_string($_POST['profile_store1']);
		$profilestore2 = $conn->real_escape_string($_POST['profile_store2']);
		$profilestore3 = $conn->real_escape_string($_POST['profile_store3']);
		$profilestore4 = $conn->real_escape_string($_POST['profile_store4']);
		
		//------------------------------------------------------------------------
		$profilecool1 = $conn->real_escape_string($_POST['profile_cool1']);
		$profilecool2 = $conn->real_escape_string($_POST['profile_cool2']);
		$profilecool3 = $conn->real_escape_string($_POST['profile_cool3']);
		$profilecool4 = NULL; //$conn->real_escape_string($_POST['profile_cool4']);
		
		//------------------------------------------------------------------------
		$profilefan1 = $conn->real_escape_string($_POST['profile_fan1']);
		$profilefan2 = $conn->real_escape_string($_POST['profile_fan2']);
		$profilefan3 = $conn->real_escape_string($_POST['profile_fan3']);
		$profilefan4 = NULL; //$conn->real_escape_string($_POST['profile_fan4']);
		
		//------------------------------------------------------------------------
		$profileps1 = $conn->real_escape_string($_POST['profile_ps1']);
		$profileps2 = $conn->real_escape_string($_POST['profile_ps2']);
		$profileps3 = $conn->real_escape_string($_POST['profile_ps3']);
		$profileps4 = NULL; //$conn->real_escape_string($_POST['profile_ps4']);
		
		//------------------------------------------------------------------------
		$profilecase1 = $conn->real_escape_string($_POST['profile_case1']);
		$profilecase2 = $conn->real_escape_string($_POST['profile_case2']);
		$profilecase3 = $conn->real_escape_string($_POST['profile_case3']);
		$profilecase4 = $conn->real_escape_string($_POST['profile_case4']);
		
		//Insert data into table
		$insertnewuser = "INSERT INTO profiles (userid,
													mb1, mb2, mb3, mb4,
													cpu1, cpu2, cpu3, cpu4,
													gpu1, gpu2, gpu3, gpu4,
													ram1, ram2, ram3, ram4,
													store1, store2, store3, store4,
													cool1, cool2, cool3, cool4,
													fan1, fan2, fan3, fan4,
													ps1, ps2, ps3, ps4,
													case1, case2, case3, case4)
													VALUES ('$uid',
													'$profilemb1', '$profilemb2', '$profilemb3', '$profilemb4',
													'$profilecpu1', '$profilecpu2', '$profilecpu3', '$profilecpu4',
													'$profilegpu1', '$profilegpu2', '$profilegpu3', '$profilegpu4',
													'$profileram1', '$profileram2', '$profileram3', '$profileram4',
													'$profilestore1', '$profilestore2', '$profilestore3', '$profilestore4',
													'$profilecool1', '$profilecool2', '$profilecool3', '$profilegpu4',
													'$profilefan1', '$profilefan2', '$profilefan3', '$profilefan4',
													'$profileps1', '$profileps2', '$profileps3', '$profileps4',
													'$profilecase1', '$profilecase2', '$profilecase3', '$profilecase4')";
		
		$insert = $conn->query($insertnewuser);
		
		$setstatus = "UPDATE users SET status = 0 WHERE id = '$uid'";
		$set = $conn->query($setstatus);
		
		if ($_SESSION["user_level"]  == 1)
		{
			header("Location: admindashboard.php");
			exit();
		}
		else
		{
			header("Location: userdashboard.php");
			exit();
		}
		$conn->close();
	}
	
	if (isset($_POST['submit_skipnew']))
	{
		require 'dbconnect.php';
		
		$uid = $_SESSION["user_id"];
		//Set first logon status
		
		$insertnewuser = "INSERT INTO profiles (userid) VALUES ('$uid')";
		
		$insert = $conn->query($insertnewuser);
		
		$setstatus = "UPDATE users SET status = 0 WHERE id = '$uid'";
		$set = $conn->query($setstatus);
		
		if ($_SESSION["user_level"]  == 1)
		{
			header("Location: admindashboard.php");
			exit();
		}
		else
		{
			header("Location: userdashboard.php");
			exit();
		}

		$conn->close();
	}
?>