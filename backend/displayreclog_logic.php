<?php
	//echo "recommends_display_logic_script loaded successfully";
	
	require 'dbrecmconnect.php';
	
	$uid = $_SESSION["user_id"];
	
	$tablename = $uid . "_recommendations";
	
	$getreclist = "SELECT id, name, descr FROM $tablename";
	$getrecs = $conn->query($getreclist);

	while ($row = $getrecs->fetch_array())
	{
		echo 
		
		"<div class='card border-primary mb-3 rec_card_content'>
			<div class='card-header'>" . $row['name'] . "</div>
			<div class='card-body text-primary'>
				<p class='card-text'>" . $row['descr'] . "</p>
				<form method='POST'>
					<hr>
					<a href='http://twitter.com/home?status=Just%20made%20another%20build%20at%20Intuit%20build.%20Visit%20www.intuitbuild.io' target='_blank' class='btn btn-sm btn-primary'>Tweet</a>
					<button class='btn btn-sm btn-primary' type='submit' value='" . $row['id'] . "' name='submit_viewrec'>View</button>
					<button class='btn btn-sm btn-primary' type='submit' value='" . $row['id'] . "' name='submit_delrec'>Delete</button>
				</form>
			</div>
		</div>"
		
		;
	}
	
	$conn->close();
?>