<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Salary</title>
</head>
<body>
<fieldset>
		<legend><h1>SALARY</h1></legend>
			<table border='1'>
			<tr>
			<td>Student 1</td>
			<td>5000</td>
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