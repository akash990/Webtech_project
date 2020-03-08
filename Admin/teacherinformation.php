<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher information</title>
</head>
<body>
<fieldset>
		<legend><h1>Teacher information</h1></legend>
		<div align="left"><a href="addteacher.php">Add teacher</a></div>
		<div align="center"><a href="enqueryteacher.php">Enquery teacher</a></div>
		<div align="right"><a href="deleteteacher.php">Delete teacher</a></div>
		<div align="left"><a href="showteacher.php">Show all teacher</a></div>
		
		
			
		 <div align="left"><a href="homepageA.php">Back</a></div>

 
		</fieldset>
		</body>
		</html>