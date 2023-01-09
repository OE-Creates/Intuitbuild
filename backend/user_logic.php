<?php
	//echo "user_logic_script loaded successfully";
	
	if ($_SESSION["user_loggedin"]  == 0)
	{
		header("Location: ../index.php");
		exit();
	}
	
	require 'dbconnect.php';
	
	$uid = $_SESSION["user_id"];
	
	$getprofiledetails = "SELECT * FROM profiles WHERE userid = '$uid'";
	$receivedetails = $conn->query($getprofiledetails);
	$row = $receivedetails->fetch_array();
	
	$_SESSION["profile_mb1"] = $row['mb1'];
	$_SESSION["profile_mb2"] = $row['mb2'];
	$_SESSION["profile_mb3"] = $row['mb3'];
	$_SESSION["profile_mb4"] = $row['mb4'];
	
	$_SESSION["profile_cpu1"] = $row['cpu1'];
	$_SESSION["profile_cpu2"] = $row['cpu2'];
	$_SESSION["profile_cpu3"] = $row['cpu3'];
	$_SESSION["profile_cpu4"] = $row['cpu4'];
	
	$_SESSION["profile_gpu1"] = $row['gpu1'];
	$_SESSION["profile_gpu2"] = $row['gpu2'];
	$_SESSION["profile_gpu3"] = $row['gpu3'];
	$_SESSION["profile_gpu4"] = $row['gpu4'];
	
	$_SESSION["profile_ram1"] = $row['ram1'];
	$_SESSION["profile_ram2"] = $row['ram2'];
	$_SESSION["profile_ram3"] = $row['ram3'];
	$_SESSION["profile_ram4"] = $row['ram4'];
	
	$_SESSION["profile_store1"] = $row['store1'];
	$_SESSION["profile_store2"] = $row['store2'];
	$_SESSION["profile_store3"] = $row['store3'];
	$_SESSION["profile_store4"] = $row['store4'];
	
	$_SESSION["profile_cool1"] = $row['cool1'];
	$_SESSION["profile_cool2"] = $row['cool2'];
	$_SESSION["profile_cool3"] = $row['cool3'];
	$_SESSION["profile_cool4"] = $row['cool4'];
	
	$_SESSION["profile_fan1"] = $row['fan1'];
	$_SESSION["profile_fan2"] = $row['fan2'];
	$_SESSION["profile_fan3"] = $row['fan3'];
	$_SESSION["profile_fan4"] = $row['fan4'];
	
	$_SESSION["profile_ps1"] = $row['ps1'];
	$_SESSION["profile_ps2"] = $row['ps2'];
	$_SESSION["profile_ps3"] = $row['ps3'];
	$_SESSION["profile_ps4"] = $row['ps4'];
	
	$_SESSION["profile_case1"] = $row['case1'];
	$_SESSION["profile_case2"] = $row['case2'];
	$_SESSION["profile_case3"] = $row['case3'];
	$_SESSION["profile_case4"] = $row['case4'];
	
	$conn->close();
	
	//---- CREATE RECOMMENDS LIST --------------------------------------------
	
	$usertablename = $uid . "_recommendations";
	
	$ustat = $_SESSION["user_status"];
	
	$_SESSION["user_rectable"] = $usertablename;
	
	require 'dbrecmconnect.php';
		
	//$checkforusertable = "SELECT 1 FROM $usertablename";
	//$check = $conn->query($checkforusertable);
	
	//$check = mysqli_query($conn, $checkforusertable);
	
	//if (empty($check))
	if ($ustat == 1)
	{
		$createusertable = "CREATE TABLE $usertablename (id INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
							name VARCHAR(16), descr VARCHAR(128),
							q1 VARCHAR(20), q2 VARCHAR(20), q3 VARCHAR(20), q4 VARCHAR(20), q5 VARCHAR(20), q6 VARCHAR(20),
							q7 VARCHAR(20), q8 VARCHAR(20), q9 VARCHAR(20), q10 VARCHAR(20), q11 VARCHAR(20), q12 VARCHAR(20),
							comp1 INT(10), comp2 INT(10), comp3 INT(10), comp4 INT(10), comp5 INT(10), comp6 INT(10),
							comp7 INT(10), comp8 INT(10), comp9 INT(10))";
			
		$create = $conn->query($createusertable);
		
		$_SESSION["user_status"]  = 0;
	}
	
	$conn->close();
	
	//------------------------------------------------------------------------
	
	//---- PROFILE VALUES ----------------------------------------------------
	
	if (isset($_POST['profile_updatemb']))
	{
		require 'dbconnect.php';
		
		$mb1update = $conn->real_escape_string($_POST['update_mb1']);
		$mb2update = $conn->real_escape_string($_POST['update_mb2']);
		$mb3update = $conn->real_escape_string($_POST['update_mb3']);
		$mb4update = $conn->real_escape_string($_POST['update_mb4']);
		
		$updateprofile = "UPDATE profiles SET mb1 = '$mb1update', mb2 = '$mb2update', mb3 = '$mb3update', mb4 = '$mb4update'  WHERE userid = '$uid'";
		$update = $conn->query($updateprofile);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['profile_updatecpu']))
	{
		require 'dbconnect.php';
		
		$cpu1update = $conn->real_escape_string($_POST['update_cpu1']);
		$cpu2update = $conn->real_escape_string($_POST['update_cpu2']);
		$cpu3update = $conn->real_escape_string($_POST['update_cpu3']);
		$cpu4update = $conn->real_escape_string($_POST['update_cpu4']);
		
		$updateprofile = "UPDATE profiles SET cpu1 = '$cpu1update', cpu2 = '$cpu2update', cpu3 = '$cpu3update', cpu4 = '$cpu4update'  WHERE userid = '$uid'";
		$update = $conn->query($updateprofile);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['profile_updategpu']))
	{
		require 'dbconnect.php';
		
		$gpu1update = $conn->real_escape_string($_POST['update_gpu1']);
		$gpu2update = $conn->real_escape_string($_POST['update_gpu2']);
		$gpu3update = $conn->real_escape_string($_POST['update_gpu3']);
		$gpu4update = $conn->real_escape_string($_POST['update_gpu4']);
		
		$updateprofile = "UPDATE profiles SET gpu1 = '$gpu1update', gpu2 = '$gpu2update', gpu3 = '$gpu3update', gpu4 = '$gpu4update'  WHERE userid = '$uid'";
		$update = $conn->query($updateprofile);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['profile_updateram']))
	{
		require 'dbconnect.php';
		
		$ram1update = $conn->real_escape_string($_POST['update_ram1']);
		$ram2update = $conn->real_escape_string($_POST['update_ram2']);
		$ram3update = $conn->real_escape_string($_POST['update_ram3']);
		$ram4update = $conn->real_escape_string($_POST['update_ram4']);
		
		$updateprofile = "UPDATE profiles SET ram1 = '$ram1update', ram2 = '$ram2update', ram3 = '$ram3update', ram4 = '$ram4update'  WHERE userid = '$uid'";
		$update = $conn->query($updateprofile);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['profile_updatestore']))
	{
		require 'dbconnect.php';
		
		$store1update = $conn->real_escape_string($_POST['update_store1']);
		$store2update = $conn->real_escape_string($_POST['update_store2']);
		$store3update = $conn->real_escape_string($_POST['update_store3']);
		$store4update = $conn->real_escape_string($_POST['update_store4']);
		
		$updateprofile = "UPDATE profiles SET store1 = '$store1update', store2 = '$store2update', store3 = '$store3update', store4 = '$store4update'  WHERE userid = '$uid'";
		$update = $conn->query($updateprofile);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['profile_updatecool']))
	{
		require 'dbconnect.php';
		
		$cool1update = $conn->real_escape_string($_POST['update_cool1']);
		$cool2update = $conn->real_escape_string($_POST['update_cool2']);
		$cool3update = $conn->real_escape_string($_POST['update_cool3']);
		$cool4update = $conn->real_escape_string($_POST['update_cool4']);
		
		$updateprofile = "UPDATE profiles SET cool1 = '$cool1update', cool2 = '$cool2update', cool3 = '$cool3update', cool4 = '$cool4update'  WHERE userid = '$uid'";
		$update = $conn->query($updateprofile);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['profile_updatefan']))
	{
		require 'dbconnect.php';
		
		$fan1update = $conn->real_escape_string($_POST['update_fan1']);
		$fan2update = $conn->real_escape_string($_POST['update_fan2']);
		$fan3update = $conn->real_escape_string($_POST['update_fan3']);
		$fan4update = $conn->real_escape_string($_POST['update_fan4']);
		
		$updateprofile = "UPDATE profiles SET fan1 = '$fan1update', fan2 = '$fan2update', fan3 = '$fan3update', fan4 = '$fan4update'  WHERE userid = '$uid'";
		$update = $conn->query($updateprofile);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['profile_updateps']))
	{
		require 'dbconnect.php';
		
		$ps1update = $conn->real_escape_string($_POST['update_ps1']);
		$ps2update = $conn->real_escape_string($_POST['update_ps2']);
		$ps3update = $conn->real_escape_string($_POST['update_ps3']);
		$ps4update = $conn->real_escape_string($_POST['update_ps4']);
		
		$updateprofile = "UPDATE profiles SET ps1 = '$ps1update', ps2 = '$ps2update', ps3 = '$ps3update', ps4 = '$ps4update'  WHERE userid = '$uid'";
		$update = $conn->query($updateprofile);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['profile_updatecase']))
	{
		require 'dbconnect.php';
		
		$case1update = $conn->real_escape_string($_POST['update_case1']);
		$case2update = $conn->real_escape_string($_POST['update_case2']);
		$case3update = $conn->real_escape_string($_POST['update_case3']);
		$case4update = $conn->real_escape_string($_POST['update_case4']);
		
		$updateprofile = "UPDATE profiles SET case1 = '$case1update', case2 = '$case2update', case3 = '$case3update', case4 = '$case4update'  WHERE userid = '$uid'";
		$update = $conn->query($updateprofile);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	//---- ACCOUNT SETTINGS --------------------------------------------------
	
	if (isset($_POST['profile_updateemail']))
	{
		require 'dbconnect.php';
		
		$emailupdate = $conn->real_escape_string($_POST['update_email']);
		
		$updateprofile = "UPDATE users SET email = '$emailupdate'  WHERE id = '$uid'";
		$update = $conn->query($updateprofile);
		
		$getnewemail = "SELECT email FROM users WHERE id = '$uid'";
		$newemail = $conn->query($getnewemail);
		$row = $newemail->fetch_array();
		$_SESSION["user_email"] = $row['email'];
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['profile_updatepassword']))
	{
		require 'dbconnect.php';
		
		$passwordupdate = $conn->real_escape_string($_POST['update_pass']);
		$passwordupdate2 = $conn->real_escape_string($_POST['update_pass2']);
		
		if ($passwordupdate == $passwordupdate2)
		{
			$passwordhash = sha1($passwordupdate); //<-------SHA1 PASSWORD ENCRYPTION
			$updateprofile = "UPDATE users SET password = '$passwordhash'  WHERE id = '$uid'";
			$update = $conn->query($updateprofile);
		}
		else
		{
			//echo "Passwords did not match.";
		}
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['profile_updateusername']))
	{
		require 'dbconnect.php';
		
		$usernameupdate = $conn->real_escape_string($_POST['update_username']);
		
		$updateprofile = "UPDATE users SET username = '$usernameupdate'  WHERE id = '$uid'";
		$update = $conn->query($updateprofile);
		
		$getnewusername = "SELECT * FROM users WHERE id = '$uid'";
		$newusername = $conn->query($getnewusername);
		$row = $newusername->fetch_array();
		$_SESSION["user_name"] = $row['username'];
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	//---- FEEDBACK ----------------------------------------------------------
	
	if (isset($_POST['submit_feedback']))
	{
		require 'dbconnect.php';
		
		$userfeedback = $conn->real_escape_string($_POST['feedback_formdata']);
		
		$addfeedback = "INSERT INTO feedback (feedback_info) VALUES('$userfeedback')";
		$add = $conn->query($addfeedback);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	//---- NEW RECOMMENDATIONS -----------------------------------------------
	
	if (isset($_GET['submit_newrec']))
	{
		header("Location: questions.php");
		exit();
	}
	
	if (isset($_POST['submit_viewrec']))
	{
		require 'dbrecmconnect.php';
		
		//Check for id in table
		$recommendid = $conn->real_escape_string($_POST['submit_viewrec']);
		
		$findrecid = "SELECT * FROM $usertablename WHERE id='$recommendid'";
		$findrecommend = $conn->query($findrecid);
		
		if ($findrecommend->num_rows > 0)
		{
			//Set the reommendation ID to the session and carry on to the recommend page
			$_SESSION["view_recommend_id"] = $recommendid;
			
			header("Location: recommendsheet.php");
			exit();
		}
		
		$conn->close();
	}
	
	if (isset($_POST['submit_delrec']))
	{
		require 'dbrecmconnect.php';
		
		$recommendid = $conn->real_escape_string($_POST['submit_delrec']);
		
		$findrecid = "SELECT * FROM $usertablename WHERE id='$recommendid'";
		$findrecommend = $conn->query($findrecid);
		
		if ($findrecommend->num_rows > 0)
		{
			$deletequery = "DELETE FROM $usertablename WHERE id = '$recommendid'";
			$delete = $conn->query($deletequery);
		}
		
		$conn->close();
		
		header("refresh: 0");
		exit();
	}
?>