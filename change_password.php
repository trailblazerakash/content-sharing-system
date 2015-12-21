<?php 
include 'core/init.php';
protect_pages();
include 'includes/overall/header.php';

$errors = array();
if(empty($_POST)===false){

	$required_fields= array('current_password','password','password_again');//checking empty fields
	foreach($_POST as $key=>$value){
		if(empty($value)&&in_array($key,$required_fields)===true){
			$errors[] = 'Fields Marked with Aiersticks are compulsory';
			break;
			}
		
		}
	
	
	
	if(empty($errors)=== true){
		if(sha1($_POST['current_password'])=== $user_data['password']){
		
	if(strlen($_POST['password'])<6){
		$errors[] = 'your password must be atleast 6 character long';
 		
		}
		if($_POST['password']!=$_POST['password_again']){
			$errors[]='Password does not match';
			}
			if($_POST['current_password']=== $_POST['password'] ){$errors[]='Please enter a new password';}
 	}
	
	else{
		$errors[] = 'you\'ve entered a wrong password';
		}
	}
	}



//print_r($errors);













?> 

<?php if(isset($_GET['success'])&&empty($_GET['success'])){
	echo '<div align="center"><h2>you have changed your password successfully</h2></div>';}else{
if(empty($_POST)=== false && empty($errors)=== true){
	//functionality for change password
	change_password($session_id,$password);
	header('location:change_password.php?success');
	echo 'ok!!';
	
}else{
	echo output_errors($errors);}

?>
<td><div align="left"><h1>Change Password</h1><form action="" method="post">
<ul>
<li style="display:!important">Current Password*<input type="password" name="current_password" placeholder="current password" /><br><br></li>
<li>New Password*<input type="password" name="password" placeholder="new password" /><br><br></li>
<li> Password Again*<input type="password" name="password_again" placeholder="enter again" /><br><br></li>
<li><input type="submit" value="Change Password"></li>
</ul> 
</div></td>
<?php
include 'includes/aside.php';
?>
<?php } include 'includes/overall/footer.php';?>



