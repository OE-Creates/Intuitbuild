<?php
	//echo "componentsdisplay_logic_script loaded successfully";
	
	require 'dbcompconnect.php';
	
	$getmblist = "SELECT * FROM fans";
	$getmb = $conn->query($getmblist);

	while ($row = $getmb->fetch_array())
	{
		echo "<b>" . $row['id'] . "</b> | " . $row['prop1'] . " | " . $row['prop2'] . " CFM | " . $row['prop3'] . " mm | " . $row['prop4'] . " db | " . $row['prop5'] . " | " . $row['weight'] . " End | $" . $row['price'] . " | <a href=" . $row['link'] . " target='_blank'>View</a><hr>";
	}
	
	$conn->close();
?>