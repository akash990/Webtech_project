<?php	
	session_start();
	if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Successfully Posted Notice
</body>
</html>