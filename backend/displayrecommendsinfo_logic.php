<?php
	//echo "recommends_display_logic_script loaded successfully";
	
	require 'dbcompconnect.php';
	
	$cost1 = $cost2 = $cost3 = $cost4 = $cost5 = $cost6 = $cost7 = $cost8 = $cost9 = $cost10 = "";
	
	$mbinfoid = $_SESSION['recommend_comp1'];
	$getpartinfo = "SELECT * FROM motherboards WHERE id = $mbinfoid";
	$getpart = $conn->query($getpartinfo);

	while ($row = $getpart->fetch_array())
	{
		echo "<strong>Motherboard</strong><br>";
		echo $row['prop1'] . " | " . $row['prop2'] . " | " . $row['prop3'] . " | " . $row['prop4'] . " x DIMMs | " . $row['prop5'] . " | $" . $row['price'] . " | <a href=" . $row['link'] . " target='_blank'>View</a><hr>";
		$cost1 = $row['price'];
	}
	
	$cpuinfoid = $_SESSION['recommend_comp2'];
	$getpartinfo = "SELECT * FROM cpus WHERE id = $cpuinfoid";
	$getpart = $conn->query($getpartinfo);

	while ($row = $getpart->fetch_array())
	{
		echo "<strong>Processor</strong><br>";
		echo $row['prop1'] . " | " . $row['prop2'] . " | " . $row['prop3'] . " GHz | " . $row['prop4'] . " Cores | " . $row['prop5'] . "<sup>o</sup> | $" . $row['price'] . " | <a href=" . $row['link'] . " target='_blank'>View</a><hr>";
		$cost2 = $row['price'];
	}
	
	$gpuinfoid = $_SESSION['recommend_comp3'];
	$getpartinfo = "SELECT * FROM gpus WHERE id = $gpuinfoid";
	$getpart = $conn->query($getpartinfo);

	while ($row = $getpart->fetch_array())
	{
		echo "<strong>GPU</strong><br>";
		echo $row['prop1'] . " | " . $row['prop2'] . " MHz | " . $row['prop3'] . " | " . $row['prop4'] . " GB | " . $row['prop5'] . " TFLOPS | $" . $row['price'] . " | <a href=" . $row['link'] . " target='_blank'>View</a><hr>";
		$cost3 = $row['price'];
	}
	
	$raminfoid = $_SESSION['recommend_comp4'];
	$getpartinfo = "SELECT * FROM ram WHERE id = $raminfoid";
	$getpart = $conn->query($getpartinfo);

	while ($row = $getpart->fetch_array())
	{
		echo "<strong>RAM</strong><br>";
		echo "2 x " . $row['prop1'] . " | " . $row['prop2'] . " | " . $row['prop3'] . " GB | " . $row['prop4'] . " | " . $row['prop5'] . " MHz | $" . $row['price'] . " | <a href=" . $row['link'] . " target='_blank'>View</a><hr>";
		$cost4 = $row['price'];
	}
	
	$storeinfoid = $_SESSION['recommend_comp5'];
	$getpartinfo = "SELECT * FROM storage WHERE id = $storeinfoid";
	$getpart = $conn->query($getpartinfo);

	while ($row = $getpart->fetch_array())
	{
		echo "<strong>Storage</strong><br>";
		echo $row['prop1'] . " | " . $row['prop2'] . " | " . $row['prop3'] . " RPM | " . $row['prop4'] . " GB | " . $row['prop5'] . " Mbps | $" . $row['price'] . " | <a href=" . $row['link'] . " target='_blank'>View</a><hr>";
		$cost5 = $row['price'];
	}
	
	$coolinfoid = $_SESSION['recommend_comp6'];
	$getpartinfo = "SELECT * FROM coolers WHERE id = $coolinfoid";
	$getpart = $conn->query($getpartinfo);

	while ($row = $getpart->fetch_array())
	{
		echo "<strong>CPU Cooler</strong><br>";
		echo $row['prop1'] . " | " . $row['prop2'] . " | " . $row['prop3'] . " mm | " . $row['prop4'] . " | " . $row['prop5'] . " mm | $" . $row['price'] . " | <a href=" . $row['link'] . " target='_blank'>View</a><hr>";
		$cost6 = $row['price'];
	}
	
	$faninfoid = $_SESSION['recommend_comp7'];
	$getpartinfo = "SELECT * FROM fans WHERE id = $faninfoid";
	$getpart = $conn->query($getpartinfo);

	while ($row = $getpart->fetch_array())
	{
		echo "<strong>Case Intake Fan</strong><br>";
		echo $row['prop1'] . " | " . $row['prop2'] . " CFM | " . $row['prop3'] . " mm | " . $row['prop4'] . " db | " . $row['prop5'] . " | $" . $row['price'] . " | <a href=" . $row['link'] . " target='_blank'>View</a><hr>";
		$cost7 = $row['price'];
	}
	
	$fan2infoid = $_SESSION['recommend_comp7'] + 1;
	$getpartinfo = "SELECT * FROM fans WHERE id = $fan2infoid";
	$getpart = $conn->query($getpartinfo);

	while ($row = $getpart->fetch_array())
	{
		echo "<strong>Case Exhaust Fan</strong><br>";
		echo $row['prop1'] . " | " . $row['prop2'] . " CFM | " . $row['prop3'] . " mm | " . $row['prop4'] . " db | " . $row['prop5'] . " | $" . $row['price'] . " | <a href=" . $row['link'] . " target='_blank'>View</a><hr>";
		$cost8 = $row['price'];
	}
	
	$psinfoid = $_SESSION['recommend_comp8'];
	$getpartinfo = "SELECT * FROM powersupplys WHERE id = $psinfoid";
	$getpart = $conn->query($getpartinfo);

	while ($row = $getpart->fetch_array())
	{
		echo "<strong>Power Supply</strong><br>";
		echo $row['prop1'] . " | " . $row['prop2'] . " | " . $row['prop3'] . " W | " . $row['prop4'] . " | " . $row['prop5'] . " Modular | $" . $row['price'] . " | <a href=" . $row['link'] . " target='_blank'>View</a><hr>";
		$cost9 = $row['price'];
	}
	
	$caseinfoid = $_SESSION['recommend_comp9'];
	$getpartinfo = "SELECT * FROM cases WHERE id = $caseinfoid";
	$getpart = $conn->query($getpartinfo);

	while ($row = $getpart->fetch_array())
	{
		echo "<strong>Case</strong><br>";
		echo $row['prop1'] . " | " . $row['prop2'] . " Tower | " . $row['prop3'] . " CM | " . $row['prop4'] . " | " . $row['prop5'] . " NC | $" . $row['price'] . " | <a href=" . $row['link'] . " target='_blank'>View</a><hr>";
		$cost10 = $row['price'];
	}
	
	$totalcost = $cost2 + $cost3 + $cost4 + $cost5 + $cost6 + $cost7 + $cost8 + $cost9 + $cost10;
	
	$conn->close();
	
	$_SESSION['recommend_cost'] = $totalcost;
?>