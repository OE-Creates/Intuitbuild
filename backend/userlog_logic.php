<?php
	//echo "userdisplay_logic_script loaded successfully";
	
	require 'dbconnect.php';
	
	$getuserlist = "SELECT id, username, email, level, loggedin, status FROM users";
	$getusers = $conn->query($getuserlist);

	while ($row = $getusers->fetch_array())
	{
		echo "<b>" . $row['id'] . "</b> | " . $row['username'] . " | " . $row['email'] . " | ";
		
		if ($row['level'] == 1)
		{ echo "Administrator"; }
		else
		{echo "Regular"; }
	
		echo " | ";
		 
		if ($row['loggedin'] == 1)
		{ echo "Logged In"; }
		else
		{ echo "Logged Out"; }
	
		echo " | ";
		  
		if ($row['status'] == 1)
		{ echo "New User";}
		else
		{ echo "";}

		echo "<hr>";
	}
	
	$conn->close();
?>