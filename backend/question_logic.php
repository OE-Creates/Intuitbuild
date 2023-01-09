<?php
	// echo "question_logic_script loaded successfully";
	
	if ($_SESSION["user_loggedin"]  == 0)
	{
		header("Location: ../index.php");
		exit();
	}
	
	$uid = $_SESSION["user_id"];
	
	$usertablename = $_SESSION["user_rectable"];
	
	if (isset($_POST['submit_questions']))
	{
		require 'dbrecmconnect.php';
		
		$recname = $conn->real_escape_string($_POST['recommendname']);
		$recdesc = $conn->real_escape_string($_POST['recommenddescr']);
		
		$q1 = $conn->real_escape_string($_POST['question_1']);
		$q2 = $conn->real_escape_string($_POST['question_2']);
		$q3 = $conn->real_escape_string($_POST['question_3']);
		$q4 = $conn->real_escape_string($_POST['question_4']);
		$q5 = $conn->real_escape_string($_POST['question_5']);
		$q6 = $conn->real_escape_string($_POST['question_6']);
		$q7 = $conn->real_escape_string($_POST['question_7']);
		$q8 = $conn->real_escape_string($_POST['question_8']);
		$q9 = $conn->real_escape_string($_POST['question_9']);
		$q10 = $conn->real_escape_string($_POST['question_10']);
		$q11 = $conn->real_escape_string($_POST['question_11']);
		$q12 = $conn->real_escape_string($_POST['question_12']);
		
		$answeredquestions = "INSERT INTO $usertablename (name, descr, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12)
								VALUES('$recname', '$recdesc', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$q12')";
		$insertanswers = $conn->query($answeredquestions);
		
		$findrecommendid = "SELECT id FROM $usertablename ORDER BY id DESC LIMIT 1";
		$findid = $conn->query($findrecommendid);
		$row = $findid->fetch_array();
		
		$_SESSION["view_recommend_id"] = $row['id'];
		
		//Evaluate the given answers
		
		//Question1
		if ($q2 <= 300)
		{
			//Default to low tier gear
			
			$latestid = $_SESSION["view_recommend_id"];
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM motherboards ORDER BY price ASC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp1 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM cpus ORDER BY price ASC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp2 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM gpus ORDER BY price ASC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp3 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM ram ORDER BY price ASC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp4 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM storage ORDER BY price ASC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp5 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
			
			require 'dbcompconnect.php';
			$tablename = "coolers";
			$getlowestitems = "SELECT id FROM coolers ORDER BY price ASC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp6 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM fans ORDER BY price ASC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp7 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM powersupplys ORDER BY price ASC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp8 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM cases ORDER BY price ASC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp9 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
		}
		else if ($q2 > 300 && $q2 <= 700)
		{
			//Low tier gear
			$latestid = $_SESSION["view_recommend_id"];
			
			$testinsertcomps = "UPDATE $usertablename SET comp1 = '7', comp2 = '11', comp3 = '1', comp4 = '2', comp5 = '1', comp6 = '11', comp7 = '12', comp8 = '5', comp9 = '5' WHERE id = '$latestid'";
			$insertcomps = $conn->query($testinsertcomps);
		}
		else if ($q2 > 700 && $q2 <= 1100)
		{
			//Low tier gear
			$latestid = $_SESSION["view_recommend_id"];
			
			$testinsertcomps = "UPDATE $usertablename SET comp1 = '6', comp2 = '4', comp3 = '10', comp4 = '2', comp5 = '1', comp6 = '2', comp7 = '2', comp8 = '7', comp9 = '6' WHERE id = '$latestid'";
			$insertcomps = $conn->query($testinsertcomps);
		}
		else if ($q2 > 1100 && $q2 <= 1500)
		{
			//Mid tier gear
			$latestid = $_SESSION["view_recommend_id"];
			
			$testinsertcomps = "UPDATE $usertablename SET comp1 = '9', comp2 = '2', comp3 = '9', comp4 = '11', comp5 = '13', comp6 = '3', comp7 = '4', comp8 = '11', comp9 = '13' WHERE id = '$latestid'";
			$insertcomps = $conn->query($testinsertcomps);
			
		}
		else if ($q2 > 1500 && $q2 <= 2000)
		{
			//Mid tier gear
			$latestid = $_SESSION["view_recommend_id"];
			
			$testinsertcomps = "UPDATE $usertablename SET comp1 = '5', comp2 = '8', comp3 = '11', comp4 = '2', comp5 = '2', comp6 = '2', comp7 = '8', comp8 = '4', comp9 = '3' WHERE id = '$latestid'";
			$insertcomps = $conn->query($testinsertcomps);
			
		}
		else if ($q2 > 2000 && $q2 <= 2500)
		{
			//Mid tier gear
			$latestid = $_SESSION["view_recommend_id"];
			
			$testinsertcomps = "UPDATE $usertablename SET comp1 = '3', comp2 = '10', comp3 = '9', comp4 = '9', comp5 = '8', comp6 = '11', comp7 = '3', comp8 = '6', comp9 = '10' WHERE id = '$latestid'";
			$insertcomps = $conn->query($testinsertcomps);
		}
		else if ($q2 > 2500 && $q2 <= 3100)
		{
			//Mid tier gear
			$latestid = $_SESSION["view_recommend_id"];
			
			$testinsertcomps = "UPDATE $usertablename SET comp1 = '1', comp2 = '14', comp3 = '6', comp4 = '4', comp5 = '3', comp6 = '2', comp7 = '1', comp8 = '3', comp9 = '2' WHERE id = '$latestid'";
			$insertcomps = $conn->query($testinsertcomps);
		}
		else if ($q2 > 3100 && $q2 <= 3600)
		{
			//Mid tier gear
			$latestid = $_SESSION["view_recommend_id"];
			
			$testinsertcomps = "UPDATE $usertablename SET comp1 = '3', comp2 = '7', comp3 = '4', comp4 = '5', comp5 = '7', comp6 = '1', comp7 = '3', comp8 = '4', comp9 = '2' WHERE id = '$latestid'";
			$insertcomps = $conn->query($testinsertcomps);
		}
		else if ($q2 > 3600 && $q2 <= 4000)
		{
			//Mid tier gear
			$latestid = $_SESSION["view_recommend_id"];
			
			$testinsertcomps = "UPDATE $usertablename SET comp1 = '4', comp2 = '14', comp3 = '4', comp4 = '11', comp5 = '7', comp6 = '11', comp7 = '9', comp8 = '4', comp9 = '10' WHERE id = '$latestid'";
			$insertcomps = $conn->query($testinsertcomps);
		}
		else
		{
			//Default to high tier gear
			
			$latestid = $_SESSION["view_recommend_id"];
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM motherboards ORDER BY price DESC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp1 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM cpus ORDER BY price DESC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp2 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM gpus ORDER BY price DESC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp3 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM ram ORDER BY price DESC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp4 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM storage ORDER BY price DESC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp5 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM coolers ORDER BY price DESC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp6 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM fans ORDER BY price DESC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp7 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM powersupplys ORDER BY price DESC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp8 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
			
			require 'dbcompconnect.php';
			$getlowestitems = "SELECT id FROM cases ORDER BY price DESC LIMIT 1";
			$getitemid = $conn->query($getlowestitems);
			$row = $getitemid->fetch_array();
			$_SESSION["hold"] = $row['id'];
			$receiveditem = $_SESSION["hold"];
			
			require 'dbrecmconnect.php';
			$placerecommend = "UPDATE $usertablename SET comp9 = '$receiveditem' WHERE id = '$latestid'";
			$placerec = $conn->query($placerecommend);
		}
		
		header("Location: recommendsheet.php");
		exit();
	}
?>