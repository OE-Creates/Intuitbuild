<?php
	//echo "componentsdisplay_logic_script loaded successfully";
	
	require 'dbcompconnect.php';
	
	$getmblist = "SELECT * FROM motherboards";
	$getmb = $conn->query($getmblist);

	while ($row = $getmb->fetch_array())
	{
		echo "<b>" . $row['id'] . "</b> | " . $row['prop1'] . " | " . $row['prop2'] . " | " . $row['prop3'] . " | " . $row['prop4'] . " DIMM Slots | Supports " . $row['prop5'] . " | " . $row['weight'] . " End | $" . $row['price'] . " | <a href=" . $row['link'] . " target='_blank'>View</a><hr>";
	}
	
	$conn->close();
?>