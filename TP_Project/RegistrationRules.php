<?php
	$fonts= "verdana";
	
?>

<html>
<head>
		<title>PHP SYNTEX</title>
		<style>
		body{font-family:$fonts;}
		.phpcoding{width:1500px ;margin: 10; background:#ddd;}
		.header,.footer {background:#444;color:#FC8C41 ;text-align:center;padding: 10px;}
		.main{min-height:580px;background:#444;}
		.header h2,.footer h2 {margin:0 auto;}
		</style>
</head>
<body>
<div class="phpcoding">
<section class="header">
	<h2> Registration Rules </h2>
</section>
<section class="main">
		
		<table>
			<tr>
				<td><span style='color:#FC8C41'><b>Full Name:</b></span></td>
				<td><span style='color:#FC8C41'>1.You have to submit your name which will contain atleast two words.</br>2.you are not allowed to submit empty space .</br> 3.You are not allowed to use any special characters </span></td>
			
			</tr>
			 <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td><span style='color:#FC8C41'><b>Nick Name:</b></span></td>
				<td><span style='color:#FC8C41'>1.You have to submit a unique name,if your name is already in the system then it will be notified </br>2.you are not allowed to submit empty space.</br> 3.You are not allowed to use more than 1 word.</span></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td><span style='color:#FC8C41'><b>Password:</b></span></td>
				<td><span style='color:#FC8C41'>1.You have to submit atleast five characters.</br>2.you are not allowed to submit empty space . </span></td>
			
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td><span style='color:#FC8C41'><b>Gender:</b></span></td>
				<td><span style='color:#FC8C41'>1.You have to Choose select your gender. </span></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td><span style='color:#FC8C41'><b>Education:</b></span></td>
				<td><span style='color:#FC8C41'>1.You have to select your Compleated course.</br>2.If you select HSC,then must be fill up SSC also. </span></td>
			</tr>
			
			
			
		</table>
		
		
		<a href="Registration.php"><span style='color:#F4FF09'><h3>next</h3></span></a>
</section>
	
<section class="footer">
	<h2> localhost/Form_Validation </h2>
</section>
</div>
</body>

</html>
