<?php
	//echo "componentsdisplay_logic_script loaded successfully";
	
	require 'dbcompconnect.php';
	
	$getmblist = "SELECT * FROM storage";
	$getmb = $conn->query($getmblist);

	while ($row = $getmb->fetch_array())
	{
		echo "<b>" . $row['id'] . "</b> | " . $row['prop1'] . " | " . $row['prop2'] . " | " . $row['prop3'] . " RPM | " . $row['prop4'] . " GB | " . $row['prop5'] . " Mbps | " . $row['weight'] . " End | $" . $row['price'] . " | <a href=" . $row['link'] . " target='_blank'>View</a><hr>";
	}
	
	$conn->close();
?>