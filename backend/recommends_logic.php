<?php
	//echo "recommends_logic_script loaded successfully";
	
	if ($_SESSION["user_loggedin"]  == 0)
	{
		header("Location: ../index.php");
		exit();
	}

	require 'dbrecmconnect.php';
	
	$uid = $_SESSION["user_id"];
	$usertablename = $uid . "_recommendations";
	$recid = $_SESSION["view_recommend_id"];
	
	$pullrecommends = "SELECT name, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, comp1, comp2, comp3, comp4, comp5, comp6, comp7, comp8, comp9 FROM $usertablename WHERE id = $recid";
	$pullit = $conn->query($pullrecommends);
	
	$row = $pullit->fetch_array();
	
	$_SESSION['recommend_name'] = $row['name'];
	
	$_SESSION['recommend_q1'] = $row['q1'];
	$_SESSION['recommend_q2'] = $row['q2'];
	$_SESSION['recommend_q3'] = $row['q3'];
	$_SESSION['recommend_q4'] = $row['q4'];
	$_SESSION['recommend_q5'] = $row['q5'];
	$_SESSION['recommend_q6'] = $row['q6'];
	$_SESSION['recommend_q7'] = $row['q7'];
	$_SESSION['recommend_q8'] = $row['q8'];
	$_SESSION['recommend_q9'] = $row['q9'];
	$_SESSION['recommend_q10'] = $row['q10'];
	$_SESSION['recommend_q11'] = $row['q11'];
	$_SESSION['recommend_q12'] = $row['q12'];
	
	$_SESSION['recommend_comp1'] = $row['comp1'];
	$_SESSION['recommend_comp2'] = $row['comp2'];
	$_SESSION['recommend_comp3'] = $row['comp3'];
	$_SESSION['recommend_comp4'] = $row['comp4'];
	$_SESSION['recommend_comp5'] = $row['comp5'];
	$_SESSION['recommend_comp6'] = $row['comp6'];
	$_SESSION['recommend_comp7'] = $row['comp7'];
	$_SESSION['recommend_comp8'] = $row['comp8'];
	$_SESSION['recommend_comp9'] = $row['comp9'];
?>