<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Available Tuition</title>
</head>
<body>
<fieldset>
		<legend><h1>AVAILABLE TUITION</h1></legend>
		 <button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script> 
		</fieldset>
		</body>
		</html>