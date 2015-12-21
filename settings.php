<?php 
include 'core/init.php';
protect_pages();
include 'includes/overall/header.php';
$errors=array();
if(empty($_POST)===false){
if(isset($_POST['submit'])){
	$required_fields= array('firstname','email','lastname');
	foreach($_POST as $key=>$value){
		if(empty($value)&&in_array($key,$required_fields)===true){
			$errors[] = 'Fields Marked with Aiersticks are compulsory';
			break;
			}
		
		}
	
	
	}



if(empty($errors)===true){
	if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)===false){
		
		$errors[]='please enter a validate email address';
		}
		if(email_exists($_POST['email'])===true&&$_POST['email']!=$user_data['email']){
			$errors[]='email '.$_POST['email'].' is already in used';}
	
	
	}







} 









?>
<?php
//kuch cheezeexperiencde pr hi aati hai!!!
  if(isset($_GET['success'])&&empty($_GET['success'])){
	echo '<div align="center"><h2>you have Updated your profile successfully</h2></div>';}
else{
if(empty($_POST)===false&& empty($errors)===true){
	$update_data = array(
	'firstname' => $_POST['firstname'],
	'lastname' =>$_POST['lastname'],
	'email' =>$_POST['email']
	);
	update_data($update_data);
	header('location:settings.php?success');
	
	
}
else if(empty($errors)===false){
	echo output_errors($errors);
	
	}

?>
<td valign="top"><h1>Change Your Account Settings Here!!<hr></h1><div style="padding-left:10px; margin-left:20px"><form action="" method="post">
<ul>

<li>First name*<br><input type="text" name="firstname" value="<?php echo$user_data['firstname'];?>"></li><br>
<li>Last name*<br><input type="text" name="lastname" value="<?php echo$user_data['lastname'];?>"></li><br>
<li>Email Address*<br><input type="text" name="email" value="<?php echo$user_data['email'];?>"></li><br><br>




<input type="submit" name="submit" value="Update">



</ul>



</form> </div></td>
<?php }?><td></td>
<?php 
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';?>



