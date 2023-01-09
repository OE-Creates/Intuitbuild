<?php
	//echo "feedbackdisplay_logic_script loaded successfully";
	
	require 'dbconnect.php';
	
	$getfeedbacklist = "SELECT * FROM feedback";
	$getfeedback = $conn->query($getfeedbacklist);

	while ($row = $getfeedback->fetch_array())
	{
		echo $row['feedback_info'] . "<hr>";
	}
	
	$conn->close();
?>