<?php
	$conn = new mysqli("localhost", "root", "", "intuitbuild");
	if($conn->connect_errno > 0)
	{
		die('Connection failed [' . $conn->connect_error . ']');
	}
?>