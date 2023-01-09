<?php
	//echo "administrator_logic_script loaded successfully";

	if (isset($_GET['submit_management']))
	{
		header("Location: management.php");
		exit();
	}
	
	if (isset($_GET['submit_home']))
	{
		header("Location: admindashboard.php");
		exit();
	}
	
	if ($_SESSION['user_level'] == 0)
	{
		header("Location: userdashboard.php");
		exit();
	}
	
	if ($_SESSION["user_loggedin"]  == 0)
	{
		header("Location: ../index.php");
		exit();
	}
	
	//---- MANAGEMENT OPTIONS ------------------------------------------------
	
	//---- MOTHERBOARDS
	
	if (isset($_POST['submit_addmb']))
	{
		require 'dbcompconnect.php';
		
		$mbprop1 = $conn->real_escape_string($_POST['mbprop1']);
		$mbprop2 = $conn->real_escape_string($_POST['mbprop2']);
		$mbprop3 = $conn->real_escape_string($_POST['mbprop3']);
		$mbprop4 = $conn->real_escape_string($_POST['mbprop4']);
		$mbprop5 = $conn->real_escape_string($_POST['mbprop5']);
		$mbpropweight = $conn->real_escape_string($_POST['mbpropweight']);
		$mbpropprice = $conn->real_escape_string($_POST['mbpropprice']);
		$mbproplink = $conn->real_escape_string($_POST['mbproplink']);
		
		$insertnewcomp = "INSERT INTO motherboards (prop1, prop2, prop3, prop4, prop5, weight, price, link)
							VALUES ('$mbprop1', '$mbprop2', '$mbprop3', '$mbprop4', '$mbprop5', '$mbpropweight', '$mbpropprice', '$mbproplink')";
		$insertcomp=$conn->query($insertnewcomp);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['submit_deletemb']))
	{
		require 'dbcompconnect.php';
		
		$mbid = $conn->real_escape_string($_POST['mbid']);
		
		$findselectedcomp = "SELECT id FROM motherboards WHERE id=$mbid";
		$findcomp=$conn->query($findselectedcomp);
		if ($findcomp->num_rows !== 0)
		{
			$deleteselectedcomp = "DELETE FROM motherboards WHERE id=$mbid";
			$deletecomp=$conn->query($deleteselectedcomp);
		}
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	//---- CPUS
	
	if (isset($_POST['submit_addcpu']))
	{
		require 'dbcompconnect.php';
		
		$cpuprop1 = $conn->real_escape_string($_POST['cpuprop1']);
		$cpuprop2 = $conn->real_escape_string($_POST['cpuprop2']);
		$cpuprop3 = $conn->real_escape_string($_POST['cpuprop3']);
		$cpuprop4 = $conn->real_escape_string($_POST['cpuprop4']);
		$cpuprop5 = $conn->real_escape_string($_POST['cpuprop5']);
		$cpupropweight = $conn->real_escape_string($_POST['cpupropweight']);
		$cpupropprice = $conn->real_escape_string($_POST['cpupropprice']);
		$cpuproplink = $conn->real_escape_string($_POST['cpuproplink']);
		
		$insertnewcomp = "INSERT INTO cpus (prop1, prop2, prop3, prop4, prop5, weight, price, link)
							VALUES ('$cpuprop1', '$cpuprop2', '$cpuprop3', '$cpuprop4', '$cpuprop5', '$cpupropweight', '$cpupropprice', '$cpuproplink')";
		$insertcomp=$conn->query($insertnewcomp);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['submit_deletecpu']))
	{
		require 'dbcompconnect.php';
		
		$cpuid = $conn->real_escape_string($_POST['cpuid']);
		
		$findselectedcomp = "SELECT id FROM cpus WHERE id=$cpuid";
		$findcomp=$conn->query($findselectedcomp);
		if ($findcomp->num_rows !== 0)
		{
			$deleteselectedcomp = "DELETE FROM cpus WHERE id=$cpuid";
			$deletecomp=$conn->query($deleteselectedcomp);
		}
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	//---- GPUS
	
	if (isset($_POST['submit_addgpu']))
	{
		require 'dbcompconnect.php';
		
		$gpuprop1 = $conn->real_escape_string($_POST['gpuprop1']);
		$gpuprop2 = $conn->real_escape_string($_POST['gpuprop2']);
		$gpuprop3 = $conn->real_escape_string($_POST['gpuprop3']);
		$gpuprop4 = $conn->real_escape_string($_POST['gpuprop4']);
		$gpuprop5 = $conn->real_escape_string($_POST['gpuprop5']);
		$gpupropweight = $conn->real_escape_string($_POST['gpupropweight']);
		$gpupropprice = $conn->real_escape_string($_POST['gpupropprice']);
		$gpuproplink = $conn->real_escape_string($_POST['gpuproplink']);
		
		$insertnewcomp = "INSERT INTO gpus (prop1, prop2, prop3, prop4, prop5, weight, price, link)
							VALUES ('$gpuprop1', '$gpuprop2', '$gpuprop3', '$gpuprop4', '$gpuprop5', '$gpupropweight', '$gpupropprice', '$gpuproplink')";
		$insertcomp=$conn->query($insertnewcomp);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['submit_deletegpu']))
	{
		require 'dbcompconnect.php';
		
		$gpuid = $conn->real_escape_string($_POST['gpuid']);
		
		$findselectedcomp = "SELECT id FROM gpus WHERE id=$gpuid";
		$findcomp=$conn->query($findselectedcomp);
		if ($findcomp->num_rows !== 0)
		{
			$deleteselectedcomp = "DELETE FROM gpus WHERE id=$gpuid";
			$deletecomp=$conn->query($deleteselectedcomp);
		}
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	//---- RAM
	
	if (isset($_POST['submit_addram']))
	{
		require 'dbcompconnect.php';
		
		$ramprop1 = $conn->real_escape_string($_POST['ramprop1']);
		$ramprop2 = $conn->real_escape_string($_POST['ramprop2']);
		$ramprop3 = $conn->real_escape_string($_POST['ramprop3']);
		$ramprop4 = $conn->real_escape_string($_POST['ramprop4']);
		$ramprop5 = $conn->real_escape_string($_POST['ramprop5']);
		$rampropweight = $conn->real_escape_string($_POST['rampropweight']);
		$rampropprice = $conn->real_escape_string($_POST['rampropprice']);
		$ramproplink = $conn->real_escape_string($_POST['ramproplink']);
		
		$insertnewcomp = "INSERT INTO ram (prop1, prop2, prop3, prop4, prop5, weight, price, link)
							VALUES ('$ramprop1', '$ramprop2', '$ramprop3', '$ramprop4', '$ramprop5', '$rampropweight', '$rampropprice', '$ramproplink')";
		$insertcomp=$conn->query($insertnewcomp);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['submit_deleteram']))
	{
		require 'dbcompconnect.php';
		
		$ramid = $conn->real_escape_string($_POST['ramid']);
		
		$findselectedcomp = "SELECT id FROM ram WHERE id=$ramid";
		$findcomp=$conn->query($findselectedcomp);
		if ($findcomp->num_rows !== 0)
		{
			$deleteselectedcomp = "DELETE FROM ram WHERE id=$ramid";
			$deletecomp=$conn->query($deleteselectedcomp);
		}
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	//---- STORAGE
	
	if (isset($_POST['submit_addstore']))
	{
		require 'dbcompconnect.php';
		
		$storeprop1 = $conn->real_escape_string($_POST['storeprop1']);
		$storeprop2 = $conn->real_escape_string($_POST['storeprop2']);
		$storeprop3 = $conn->real_escape_string($_POST['storeprop3']);
		$storeprop4 = $conn->real_escape_string($_POST['storeprop4']);
		$storeprop5 = $conn->real_escape_string($_POST['storeprop5']);
		$storepropweight = $conn->real_escape_string($_POST['storepropweight']);
		$storepropprice = $conn->real_escape_string($_POST['storepropprice']);
		$storeproplink = $conn->real_escape_string($_POST['storeproplink']);
		
		$insertnewcomp = "INSERT INTO storage (prop1, prop2, prop3, prop4, prop5, weight, price, link)
							VALUES ('$storeprop1', '$storeprop2', '$storeprop3', '$storeprop4', '$storeprop5', '$storepropweight', '$storepropprice', '$storeproplink')";
		$insertcomp=$conn->query($insertnewcomp);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['submit_deletestore']))
	{
		require 'dbcompconnect.php';
		
		$storeid = $conn->real_escape_string($_POST['storeid']);
		
		$findselectedcomp = "SELECT id FROM storage WHERE id=$storeid";
		$findcomp=$conn->query($findselectedcomp);
		if ($findcomp->num_rows !== 0)
		{
			$deleteselectedcomp = "DELETE FROM storage WHERE id=$storeid";
			$deletecomp=$conn->query($deleteselectedcomp);
		}
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	//---- COOLER
	
	if (isset($_POST['submit_addcool']))
	{
		require 'dbcompconnect.php';
		
		$coolprop1 = $conn->real_escape_string($_POST['coolprop1']);
		$coolprop2 = $conn->real_escape_string($_POST['coolprop2']);
		$coolprop3 = $conn->real_escape_string($_POST['coolprop3']);
		$coolprop4 = $conn->real_escape_string($_POST['coolprop4']);
		$coolprop5 = $conn->real_escape_string($_POST['coolprop5']);
		$coolpropweight = $conn->real_escape_string($_POST['coolpropweight']);
		$coolpropprice = $conn->real_escape_string($_POST['coolpropprice']);
		$coolproplink = $conn->real_escape_string($_POST['coolproplink']);
		
		$insertnewcomp = "INSERT INTO coolers (prop1, prop2, prop3, prop4, prop5, weight, price, link)
							VALUES ('$coolprop1', '$coolprop2', '$coolprop3', '$coolprop4', '$coolprop5', '$coolpropweight', '$coolpropprice', '$coolproplink')";
		$insertcomp=$conn->query($insertnewcomp);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['submit_deletecool']))
	{
		require 'dbcompconnect.php';
		
		$coolid = $conn->real_escape_string($_POST['coolid']);
		
		$findselectedcomp = "SELECT id FROM coolers WHERE id=$coolid";
		$findcomp=$conn->query($findselectedcomp);
		if ($findcomp->num_rows !== 0)
		{
			$deleteselectedcomp = "DELETE FROM coolers WHERE id=$coolid";
			$deletecomp=$conn->query($deleteselectedcomp);
		}
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	//---- FANS
	
	if (isset($_POST['submit_addfan']))
	{
		require 'dbcompconnect.php';
		
		$fanprop1 = $conn->real_escape_string($_POST['fanprop1']);
		$fanprop2 = $conn->real_escape_string($_POST['fanprop2']);
		$fanprop3 = $conn->real_escape_string($_POST['fanprop3']);
		$fanprop4 = $conn->real_escape_string($_POST['fanprop4']);
		$fanprop5 = $conn->real_escape_string($_POST['fanprop5']);
		$fanpropweight = $conn->real_escape_string($_POST['fanpropweight']);
		$fanpropprice = $conn->real_escape_string($_POST['fanpropprice']);
		$fanproplink = $conn->real_escape_string($_POST['fanproplink']);
		
		$insertnewcomp = "INSERT INTO fans (prop1, prop2, prop3, prop4, prop5, weight, price, link)
							VALUES ('$fanprop1', '$fanprop2', '$fanprop3', '$fanprop4', '$fanprop5', '$fanpropweight', '$fanpropprice', '$fanproplink')";
		$insertcomp=$conn->query($insertnewcomp);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['submit_deletefan']))
	{
		require 'dbcompconnect.php';
		
		$fanid = $conn->real_escape_string($_POST['fanid']);
		
		$findselectedcomp = "SELECT id FROM fans WHERE id=$fanid";
		$findcomp=$conn->query($findselectedcomp);
		if ($findcomp->num_rows !== 0)
		{
			$deleteselectedcomp = "DELETE FROM fans WHERE id=$fanid";
			$deletecomp=$conn->query($deleteselectedcomp);
		}
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	//---- POWERSUPPLYS
	
	if (isset($_POST['submit_addps']))
	{
		require 'dbcompconnect.php';
		
		$psprop1 = $conn->real_escape_string($_POST['psprop1']);
		$psprop2 = $conn->real_escape_string($_POST['psprop2']);
		$psprop3 = $conn->real_escape_string($_POST['psprop3']);
		$psprop4 = $conn->real_escape_string($_POST['psprop4']);
		$psprop5 = $conn->real_escape_string($_POST['psprop5']);
		$pspropweight = $conn->real_escape_string($_POST['pspropweight']);
		$pspropprice = $conn->real_escape_string($_POST['pspropprice']);
		$psproplink = $conn->real_escape_string($_POST['psproplink']);
		
		$insertnewcomp = "INSERT INTO powersupplys (prop1, prop2, prop3, prop4, prop5, weight, price, link)
							VALUES ('$psprop1', '$psprop2', '$psprop3', '$psprop4', '$psprop5', '$pspropweight', '$pspropprice', '$psproplink')";
		$insertcomp=$conn->query($insertnewcomp);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['submit_deleteps']))
	{
		require 'dbcompconnect.php';
		
		$psid = $conn->real_escape_string($_POST['psid']);
		
		$findselectedcomp = "SELECT id FROM powersupplys WHERE id=$psid";
		$findcomp=$conn->query($findselectedcomp);
		if ($findcomp->num_rows !== 0)
		{
			$deleteselectedcomp = "DELETE FROM powersupplys WHERE id=$psid";
			$deletecomp=$conn->query($deleteselectedcomp);
		}
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	//---- CASES
	
	if (isset($_POST['submit_addcase']))
	{
		require 'dbcompconnect.php';
		
		$caseprop1 = $conn->real_escape_string($_POST['caseprop1']);
		$caseprop2 = $conn->real_escape_string($_POST['caseprop2']);
		$caseprop3 = $conn->real_escape_string($_POST['caseprop3']);
		$caseprop4 = $conn->real_escape_string($_POST['caseprop4']);
		$caseprop5 = $conn->real_escape_string($_POST['caseprop5']);
		$casepropweight = $conn->real_escape_string($_POST['casepropweight']);
		$casepropprice = $conn->real_escape_string($_POST['casepropprice']);
		$caseproplink = $conn->real_escape_string($_POST['caseproplink']);
		
		$insertnewcomp = "INSERT INTO cases (prop1, prop2, prop3, prop4, prop5, weight, price, link)
							VALUES ('$caseprop1', '$caseprop2', '$caseprop3', '$caseprop4', '$caseprop5', '$casepropweight', '$casepropprice', '$caseproplink')";
		$insertcomp=$conn->query($insertnewcomp);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['submit_deletecase']))
	{
		require 'dbcompconnect.php';
		
		$caseid = $conn->real_escape_string($_POST['caseid']);
		
		$findselectedcomp = "SELECT id FROM cases WHERE id=$caseid";
		$findcomp=$conn->query($findselectedcomp);
		if ($findcomp->num_rows !== 0)
		{
			$deleteselectedcomp = "DELETE FROM cases WHERE id=$caseid";
			$deletecomp=$conn->query($deleteselectedcomp);
		}
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	//---- USER MANAGEMENT OPTIONS -------------------------------------------
	
	//---- USER ADD
	
	if (isset($_POST['submit_adduserconfirm']))
	{
		require 'dbconnect.php';
		
		$uname = $conn->real_escape_string($_POST['addname']);
		$uemail = $conn->real_escape_string($_POST['addemail']);
		$ulevel = $conn->real_escape_string($_POST['addlevel']);
		$upass = $conn->real_escape_string($_POST['addpass']);
		$upass2 = $conn->real_escape_string($_POST['addpass2']);
		$upasshash = sha1($upass); //<-------SHA1 PASSWORD ENCRYPTION
		
		$uloggedin = false;
		$ustatus = true;
		
		If ($upass == $upass2)
		{
			$insertnewuser = "INSERT INTO users (username, email, password, level, loggedin, status) VALUES ('$uname', '$uemail', '$upasshash', '$ulevel', '$uloggedin', '$ustatus')";
			
			$checknewuser = "SELECT * FROM users WHERE email = '$uemail'";
			
			$run = $conn->query($checknewuser);
			if ($run->num_rows === 0)
			{
				$runadd = $conn->query($insertnewuser);
				
				$conn->close();
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
	
	//---- USER UPDATE
	
	if (isset($_POST['submit_updateusernameconfirm']))
	{
		require 'dbconnect.php';
		
		$uid = $conn->real_escape_string($_POST['updateuserunameid']);
		
		$updatedusername = $conn->real_escape_string($_POST['updateusername']);
		
		$updateusernamesql = "UPDATE users SET username = '$updatedusername'  WHERE id = '$uid'";
		$update = $conn->query($updateusernamesql);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['submit_updateuseremailconfirm']))
	{
		require 'dbconnect.php';
		
		$uid = $conn->real_escape_string($_POST['updateuseruemailid']);
		
		$updateduseremail = $conn->real_escape_string($_POST['updateuseremail']);
		
		$updateuseremailsql = "UPDATE users SET email = '$updateduseremail'  WHERE id = '$uid'";
		$update = $conn->query($updateuseremailsql);
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['submit_updateuserlevelconfirm']))
	{
		require 'dbconnect.php';
		
		$uid = $conn->real_escape_string($_POST['updateuserulevelid']);
		
		if ($_SESSION["user_id"] != $uid)
		{
			$updateduserlevel = $conn->real_escape_string($_POST['updateuserlevel']);
			
			$updateuserlevelsql = "UPDATE users SET level = '$updateduserlevel'  WHERE id = '$uid'";
			$update = $conn->query($updateuserlevelsql);
		}
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	if (isset($_POST['submit_updateuserpasswordconfirm']))
	{
		require 'dbconnect.php';
		
		$uid = $conn->real_escape_string($_POST['updateuserupassid']);
		
		$updateduserpass = $conn->real_escape_string($_POST['updateuserpass']);
		$updateduserpass2 = $conn->real_escape_string($_POST['updateuserpass2']);
		
		if ($updateduserpass == $updateduserpass2)
		{
			$updateuserpasshash = sha1($updateduserpass); //<-------SHA1 PASSWORD ENCRYPTION
			$updateuserpasshashsql = "UPDATE users SET password = '$updateuserpasshash'  WHERE id = '$uid'";
			$update = $conn->query($updateuserpasshashsql);
		}
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
	
	//---- USER DELETE
	
	if (isset($_POST['submit_deleteuserconfirm']))
	{
		require 'dbconnect.php';
		
		$deleteid = $conn->real_escape_string($_POST['deleteid']);
		
		if ($_SESSION["user_id"] != $deleteid)
		{
			$findselectedcomp = "SELECT id, status FROM users WHERE id=$deleteid";
			$findcomp=$conn->query($findselectedcomp);
			if ($findcomp->num_rows > 0)
			{
				$deleteselectedcomp = "DELETE FROM users WHERE id=$deleteid";
				$deletecomp=$conn->query($deleteselectedcomp);
				
				$deleteselectedcomp = "DELETE FROM profiles WHERE userid=$deleteid";
				$deletecomp=$conn->query($deleteselectedcomp);
				
				$dbname = "intuitbuildrecommends";
				$tablename = $deleteid . "_recommendations";
				
				$row = $findcomp->fetch_array();
				
				if ($row['status'] == 0)
				{
					$deleteselectedcomp = "DROP TABLE $dbname.$tablename";
					$deletecomp=$conn->query($deleteselectedcomp);
				}
			}
		}
		
		$conn->close();
		
		header("refresh: 0");
		exit;
	}
?>