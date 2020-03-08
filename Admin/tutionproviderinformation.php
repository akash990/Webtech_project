<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tution provider information</title>
</head>
<body>
<fieldset>
		<legend><h1>Tution provider information</h1></legend>
		<div align="left"><a href="addtutionprovider.php">Add tution provider</a></div>
		<div align="center"><a href="enquerytutionprovider.php">Enquery tution provider</a></div>
		<div align="right"><a href="deletetutionprovider.php">Delete tution provider</a></div>
		<div align="left"><a href="showtutionprovider.php">Show all tution provider</a></div>
		
		
			
		 <div align="left"><a href="homepageA.php">Back</a></div>

 
		</fieldset>
		</body>
		</html>