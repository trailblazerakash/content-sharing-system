<?php 
include 'core/init.php';
include 'includes/overall/header.php';

?>
<td>akash dwivedi</td>
<?php
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';?>



<?php 
include 'core/init.php';
logged_in_redirect();
include 'includes/overall/header.php';
if(isset($_GET['success'])){
	echo '<td valign="top" align="center"> <h2>
	We have activated your account successfully</h2><br><h3>Now you can access freely</h3>   </td>';
	
	
	
	}
else if(isset($_GET['email'])&&isset($_GET['email_code'])){
	echo $email = trim($_GET['email']);
	echo $email_code = trim($_GET['email_code']);
if(email_exists($email)===false){$error[]  ='You have entered a wrong email address';}
else if(activate($email,$email_code)===false){
	$error[] = 'Oops somthing went wrong please try again';}
	
	
	
	
	
	

?>

<?php
if(empty($error)===false){
	echo '<td>oops <br>'.output_errors($error).'</td>';
	}
else{ //echo 'ok';
header('location:activation.php?success');
exit(0);
}
	

}



?> 
<?php
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';?>



