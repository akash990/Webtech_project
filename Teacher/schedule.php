<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Schedule</title>
</head>
<body>
<fieldset>
		<legend><h1>SCHEDULE</h1></legend>
			<table border='1'>
			<tr>
			<td>Student 1</td>
			<td>Monday</td>
			<td>2-3 PM</td>
			<table><br/>
		 <button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script> 
		</fieldset>
		</body>
		</html>