<?php
	//echo "componentsdisplay_logic_script loaded successfully";
	
	require 'dbcompconnect.php';
	
	$getmblist = "SELECT * FROM cases";
	$getmb = $conn->query($getmblist);

	while ($row = $getmb->fetch_array())
	{
		echo "<b>" . $row['id'] . "</b> | " . $row['prop1'] . " | " . $row['prop2'] . " Tower | " . $row['prop3'] . " CM | " . $row['prop4'] . " | " . $row['prop5'] . " NC | " . $row['weight'] . " End | $" . $row['price'] . " | <a href=" . $row['link'] . " target='_blank'>View</a><hr>";
	}
	
	$conn->close();
?>