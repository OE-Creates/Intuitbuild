<?php
	//echo "componentsdisplay_logic_script loaded successfully";
	
	require 'dbcompconnect.php';
	
	$getgpulist = "SELECT * FROM gpus";
	$getgpu = $conn->query($getgpulist);

	while ($row = $getgpu->fetch_array())
	{
		echo "<b>" . $row['id'] . "</b> | " . $row['prop1'] . " | " . $row['prop2'] . " MHz | " . $row['prop3'] . " | " . $row['prop4'] . " GB | " . $row['prop5'] . " TFLOPS | " . $row['weight'] . " End | $" . $row['price'] . " | <a href=" . $row['link'] . " target='_blank'>View</a><hr>";
	}
	
	$conn->close();
?>