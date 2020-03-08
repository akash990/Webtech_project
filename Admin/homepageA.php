<?php	
	session_start();
	if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
<fieldset>
		<legend><h1>HOME</h1></legend>
		<h3>Welcome, <?= $_COOKIE['username']?>!</h3><br/>
       <div align="center"><a href="myprofile.php">My Profile</a></div><br/><br/>
		<div align="left"><a href="teacherinformation.php">Teacher information</a></div>
        <div align="center"><a href="studentinformation.php">Student information</a></div>
		<div align="right"><a href="tutionproviderinformation.php">Tutuion provider's information</a></div><br/><br/>
		<div align="center"><a href="logoutA.php">Logout</a></div><br/><br/>
		
		</fieldset>
</body>
</html>
