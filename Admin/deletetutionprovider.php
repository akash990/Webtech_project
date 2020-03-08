<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete tution provider</title>
</head>
<body>
<fieldset>
		<legend><h1>Delete tution provider</h1></legend>
		
		
		
		
			
		 <div align="left"><a href="tutionproviderinformation.php">Back</a></div>

 
		</fieldset>
		</body>
		</html>