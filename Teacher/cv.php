<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
<form method="POST" action="cvcheck.php">
<fieldset>
		<legend><h1>CV</h1></legend>
		 Upload CV<input type="file" id="myFile" name="filename"><br/><br/>
		 <input type="submit" name="submit" value="Submit">
		 <button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script> 
		</fieldset>
		</form>
		</body>
		</html>