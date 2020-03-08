<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
</head>
<body>
<fieldset>
		<legend><h1>My PROFILE</h1></legend>
		<div align="left"><a href="showprofile.php">Show your information</a></div>
		<div align="center"><a href="editprofile.php">Edit you information</a></div>
		<div align="right"><a href="deleteprofile.php">Delete your information</a></div>
		
		
		
		
			
		 <div align="left"><a href="homepageA.php">Back</a></div>

 
		</fieldset>
		</body>
		</html>