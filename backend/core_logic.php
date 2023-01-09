<?php
	//echo "core_logic_script loaded successfully";
	
	session_start();

	if (isset($_GET['submit_logout']))
	{
		require 'dbconnect.php';
		
		$uid = $_SESSION["user_id"];
		//Set loggedout status
		$setloggedin = "UPDATE users SET loggedin = 0 WHERE id = '$uid'";
		$set = $conn->query($setloggedin);

		$conn->close();
		
		session_unset();
		session_destroy();
		header("Location: ../index.php");
		exit();
	}
	
	if (isset($_GET['submit_returntodb']))
	{
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
	}
?>