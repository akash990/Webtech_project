<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete a teacher</title>
</head>
<body>
<fieldset>
		<legend><h1>Delete a teacher</h1></legend>
		
		
		
			
		 <div align="left"><a href="teacherinformation.php">Back</a></div>

 
		</fieldset>
		</body>
		</html>