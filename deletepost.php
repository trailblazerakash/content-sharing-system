<?php 
if(empty($_POST)===false&&isset($_POST)===true){$key =$_POST['path'];
	mysql_query("INSERT INTO `complaints` (`path`) VALUES ('$key')") ;
	header('location:downloads.php');
	exit();
	
	
	
	}



?>