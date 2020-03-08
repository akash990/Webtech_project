<?php
	$fonts= "verdana";
	session_start();
	if(!isset($_SESSION['nname'])){  
		header("location: index.php");
	}
?>

<html>
<head>
		<title>PHP SYNTEX</title>
		<style>
		body{font-family:$fonts;}
		.phpcoding{width:1500px ;margin: 10; background:#ddd;}
		.header,.footer {background:#444;color:#FC8C41 ;text-align:center;padding: 10px;}
		.main{min-height:580px;}
		.header h2,.footer h2 {margin:0 auto;}
		</style>
</head>
<body>
<div class="phpcoding">
<section class="header">
	<h2> Welcome <?php echo $_SESSION['fname'].","; ?> to your HOME PAGE </h2>
</section>
<section class="main">

		<a href="Profile.php"> <p style="text-align:center">PROFILE</p></a>
		</br></br>
		<a href="StudentList.php"> <p style="text-align:center">STUDENT LIST</p></a>
		</br></br>
		<a href="RegistrationRules.php"> <p style="text-align:center">REGISTRATION RULES</p></a>
		</br></br>
		<a href="Logout.php"> <p style="text-align:center">LOG OUT</p></a>
		</br></br>
		
</section>
	
<section class="footer">
	<h2><?php echo $_SERVER['PHP_SELF'] ; ?></h2>
</section>
</div>
</body>

</html>
