<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your information</title>
</head>
<body>
<fieldset>
		<legend><h1>Your information</h1></legend>
		
		
		
		
			
		 <div align="left"><a href="myprofile.php">Back</a></div>

 
		</fieldset>
		</body>
		</html>