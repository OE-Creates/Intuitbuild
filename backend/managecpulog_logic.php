<?php
	//echo "componentsdisplay_logic_script loaded successfully";
	
	require 'dbcompconnect.php';
	
	$getcpulist = "SELECT * FROM cpus";
	$getcpu = $conn->query($getcpulist);

	while ($row = $getcpu->fetch_array())
	{
		echo "<b>" . $row['id'] . "</b> | " . $row['prop1'] . " | " . $row['prop2'] . " | " . $row['prop3'] . " GHz | " . $row['prop4'] . " Cores | " . $row['prop5'] . "<sup>o</sup> | " . $row['weight'] . " End | $" . $row['price'] . " | <a href=" . $row['link'] . " target='_blank'>View</a><hr>";
	}
	
	$conn->close();
?>