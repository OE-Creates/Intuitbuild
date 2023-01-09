<?php
	//echo "login_logic_script loaded successfully";

	if (isset($_POST['submit_login']))
	{				  
		require 'dbconnect.php';
		
		$uemail = $conn->real_escape_string($_POST["loginemail"]);
		$upass = $conn->real_escape_string($_POST["loginpass"]);
		$upasshash = sha1($upass); //<-------SHA1 PASSWORD ENCRYPTION
		
		$findemail = "SELECT * FROM users WHERE email = '$uemail'";
		$run = $conn->query($findemail);
		while ($row = $run->fetch_array())
		{
			if ($uemail == $row['email'])
			{
				if ($upasshash == $row['password'])
				{
					//Check new user status
					if ($row['status'] == true)
					{
						$uid = $row['id'];
						//Set login status
						$setloggedin = "UPDATE users SET loggedin = true WHERE id = '$uid'";
						$set = $conn->query($setloggedin);
						
						$_SESSION["user_name"] = $row['username'];
						$_SESSION["user_id"] = $row['id'];
						$_SESSION["user_email"] = $row['email'];
						$_SESSION["user_level"] = $row['level'];
						$_SESSION["user_loggedin"] = 1;
						$_SESSION["user_status"] = $row['status'];
						header("Location: pages/newuserprofile.php");
						exit();
					}
					else
					{
						if ($row['level'] == 1)
						{
							$uid = $row['id'];
							//Set login status
							$setloggedin = "UPDATE users SET loggedin = true WHERE id = '$uid'";
							$set = $conn->query($setloggedin);
							
							$_SESSION["user_name"] = $row['username'];
							$_SESSION["user_id"] = $row['id'];
							$_SESSION["user_email"] = $row['email'];
							$_SESSION["user_level"] = $row['level'];
							$_SESSION["user_loggedin"] = 1;
							$_SESSION["user_status"] = $row['status'];
							header("Location: pages/admindashboard.php");
							exit();
						}
						else
						{
							$uid = $row['id'];
							//Set login status
							$setloggedin = "UPDATE users SET loggedin = true WHERE id = '$uid'";
							$set = $conn->query($setloggedin);
							
							$_SESSION["user_name"] = $row['username'];
							$_SESSION["user_id"] = $row['id'];
							$_SESSION["user_email"] = $row['email'];
							$_SESSION["user_level"] = $row['level'];
							$_SESSION["user_loggedin"] = 1;
							$_SESSION["user_status"] = $row['status'];
							header("Location: pages/userdashboard.php");
							exit();
						}
					}
				}
				else
				{
					//echo "Email\Password is incorrect.";
				}
			}
		}
		$conn->close();
	}
?>