<?php 
include 'core/init.php';
include 'includes/overall/header.php';
if($_GET['username']===true&&empty($_GET['username'])===false ){
	$username = $_GET['username'];
	if(user_exists($username)===true){
		$user_id = user_id_username($username);
		$user_data[] = user_data($user_id,'firstname','lastname','email');
		
		
		}
	
	}else{
		//echo "hey chud lo";
		
		header('location:index.php');
		exit();
		
		
		}


?>
<td valign="top">
<h3>Name:-   </h3><?php  echo $user_data['firstname']." ".$user_data['lastname'] ?>




</td>
<?php
include 'includes/aside.php';
 include 'includes/overall/footer.php';?>



