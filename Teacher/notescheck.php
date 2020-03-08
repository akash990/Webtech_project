<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$filename = $_REQUEST['filename'];
		
		
		if(empty(trim($filename))){
			echo "Null submission found!";
		}else{
        header("location: home.php");
		}
	}
?>