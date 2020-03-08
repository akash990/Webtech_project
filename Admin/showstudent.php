<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Show Student information</title>
</head>
<body>
<fieldset>
		<legend><h1>Show Students</h1></legend>
		
		
		
		
			
		 <div align="left"><a href="studentinformation.php">Back</a></div>

 
		</fieldset>
		</body>
		</html>