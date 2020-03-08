<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student information</title>
</head>
<body>
<fieldset>
		<legend><h1>Student information</h1></legend>
		<div align="left"><a href="addstudent.php">Add student</a></div>
		<div align="center"><a href="enquerystudent.php">Enquery student</a></div>
		<div align="right"><a href="deletestudent.php">Delete student</a></div>
		<div align="left"><a href="showstudent.php">Show all student</a></div>
		
		
			
		 <div align="left"><a href="homepageA.php">Back</a></div>

 
		</fieldset>
		</body>
		</html>