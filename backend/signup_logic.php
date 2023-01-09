<?php
	//echo "signup_logic_script loaded successfully";

	if (isset($_POST['submit_signupconfirm']))
	{
		require 'dbconnect.php';
		
		$uname = $conn->real_escape_string($_POST['uname']);
		$uemail = $conn->real_escape_string($_POST['uemail']);
		$upass = $conn->real_escape_string($_POST['upass']);
		$upass2 = $conn->real_escape_string($_POST['upass2']);
		$upasshash = sha1($upass); //<-------SHA1 PASSWORD ENCRYPTION
		
		$ulevel = 0;
		$uloggedin = $ustatus = true;
		
		If ($upass == $upass2)
		{
			$insertnewuser = "INSERT INTO users (username, email, password, level, loggedin, status) VALUES ('$uname', '$uemail', '$upasshash', '$ulevel', '$uloggedin', '$ustatus')";
			
			$checknewuser = "SELECT * FROM users WHERE email = '$uemail'";
			
			$run = $conn->query($checknewuser);
			if ($run->num_rows === 0)
			{
				$runadd = $conn->query($insertnewuser);
				If ($runadd)
				{
					//echo "New user added. Proceeding to log you in.";
				
					$getusers = "SELECT * FROM users";
					$run = $conn->query($getusers);
					
					while ($row = $run->fetch_array())
					{
						if ($uemail == $row['email'])
						{
							if ($upasshash == $row['password'])
							{
								$_SESSION["user_name"] = $row['username'];
								$_SESSION["user_id"] = $row['id'];
								$_SESSION["user_email"] = $row['email'];
								$_SESSION["user_level"] = $row['level'];
								$_SESSION["user_loggedin"] = $row['loggedin'];
								$_SESSION["user_status"] = $row['status'];
								header("Location: pages/newuserprofile.php");
								exit();
							}
						}
					}
					$conn->close();
				}
				else
				{
					//echo "Error encountered.";
					$conn->close();
				}
			}
			else
			{
				//echo "Email address already exists.";
				$conn->close();
			}
		}
		else
		{
			//echo "Passwords do not match.";
			$conn->close();
		}
	}
?>