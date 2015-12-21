<?php 
include 'core/init.php';
protect_pages();
include 'includes/overall/header.php';


if(empty($_POST)===false){
if(isset($_POST['submit'])){
	$required_fields= array('username','firstname','email','branch','year','mobile');
	foreach($_POST as $key=>$value){
		if(empty($value)&&in_array($key,$required_fields)===true){
			$error[] = 'Fields Marked with Aiersticks are compulsory';
			break;
			}
		
		}
	
	
}
	//if user name exists then show error
	if(empty($errors)=== true){
		if(user_exists_members($_POST['username'])===true)
		{
			$error[] = 'the username \''.$_POST['username'].'\' already exits';
	}
	//checked and verified 
	
	//function for checking spaces in user name
	if(preg_match('/\\s/',$_POST['username'])){
		$error[]='Username must not contain the spaces';
	}

		
 	//filtering email addres usin special constant
	if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)===false){
		
		$error[]='Please Enter a valid email address';
		}
	if(email_exists_member($_POST['email'])===true){
		$error[] = 'the email \''.$_POST['email'].'\' already in used';
		}
	
	
	
	
	
	}
	}
	
?>
<div align="justify" style="alignment-adjust:hanging"><td><?php
if(isset($_GET['success'])&&empty($_GET['success'])){
	echo '<div align="center"><h2>you have registered successfully as a member <br> Thank You </h2></div>';}
	else{
if(empty($_POST)=== false && empty($error)=== true){
	$register_data = array('username' =>$_POST['username'],

'firstname' =>$_POST['firstname'],
'lastname' =>$_POST['lastname'],
'email' =>$_POST['email'],
'branch' =>strtolower($_POST['branch']),
'year' =>$_POST['year'],
'mobile' =>$_POST['mobile']);
	
	register_data_members($register_data);
	header('location:members_form.php?success');
	exit(0);
	
}





?>
<td valign="top"><?php 
 if(empty($error)===false) {
	echo output_errors($error);} ?>



<div align="center" style="text-decoration:underline"><h1>Members Form </h1></div>

<div id="form"  align="left" style="padding:20px; margin-left:30px" >
<form action="" method="post">
Username*:<br><input type="text" name="username" placeholder="username"></li><li>

First Name*:<br><input type="text" name="firstname" placeholder="first"><br></li><li>
Last Name*:<br><input type="text" name="lastname" placeholder="last"><br></li><li>

Branch*:<br><input type="text" name="branch" placeholder="branch" ><br></li><li>
Year:<br><select name="year" >
<option value="1">First</option>
<option value="2">Second</option>
<option value="3">Third</option>
<option value="4">Fourth</option>
</select><br><br></li><li>

Email Id*:<br><input type="text" name="email" placeholder="abc@xyz.com"><br><br></li><li>
Contact no*<br><input type="text" name="mobile"><br><br></li>
<input type="submit" name="submit" value="Submit">





</form>





</div>





</td>
<?php }
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';?>