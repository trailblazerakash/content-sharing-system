<style>form {
	font:13px Georgia, "Times New Roman", Times, serif;
	background:#eee;
	margin:20px;
	padding:10px 20px;
	width:330px;
	}form ol {
		list-style:none;
		margin:0;
		padding:0;
		}

		form li {
			padding:6px;
			background:#e1e1e1;
			margin-bottom:1px;
			}

			form li#send {
				background:none;
				margin-top:6px;
				}form label {
			/*float:left;
			width:150px;
			text-align:right;
			margin-right:7px;
			color:#0066CC;
			line-height:23px;	 /* This will make the labels vertically centered with the inputs */
			}

		form input,
		form textarea {
			padding:4px;
			font:13px Georgia, "Times New Roman", Times, serif;
			border:1px solid #999999;
			width:200px;
			}

			form input:focus,
			form textarea:focus {
				border:1px solid #666;
				background:#e3f1f1;
				}</style><?php 
include 'core/init.php';
logged_in_redirect();
include 'includes/overall/header.php';
//checking the empty fields 
$error = array();
if(empty($_POST)===false){
if(isset($_POST['submit'])){
	$required_fields= array('username','password','password_again','firstname','email','branch','year');
	foreach($_POST as $key=>$value){
		if(empty($value)&&in_array($key,$required_fields)===true){
			$error[] = 'Fields Marked with Aiersticks are compulsory';
			break;
			}
		
		}
	
	
	}
	//if user name exists then show error
	if(empty($errors)=== true){
		if(user_exists($_POST['username'])===true)
		{
			$error[] = 'the username \''.$_POST['username'].'\' already exits';
	}
	
	//function for checking spaces in user name
	if(preg_match('/\\s/',$_POST['username'])){
		$error[]='Username must not contain the spaces';
		
		}
	if(strlen($_POST['password'])<6){
		$error[] = 'your password must be atleasr 6 character long';
 		
		}
		if($_POST['password']!=$_POST['password_again']){
			$error[]='Password does not match';
			}
 	//filtering email addres usin special constant
	if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)===false){
		
		$error[]='Please Enter a valid email address';
		}
	if(email_exists($_POST['email'])===true){
		$error[] = 'the email \''.$_POST['email'].'\' already in used';
		}
	
	
	
	
	
	}
	}
	
?>
<div align="justify" style="alignment-adjust:hanging"><td><?php
if(isset($_GET['success'])&&empty($_GET['success'])){
	echo "<div align='center' id= ><h2>you have registered successfully</h2></div>";}else{
if(empty($_POST)=== false && empty($error)=== true){
	$register_data = array('username' =>$_POST['username'],
'password' =>$_POST['password'],
'firstname' =>$_POST['firstname'],
'lastname' =>$_POST['lastname'],
'email' =>$_POST['email'],
'branch' =>strtolower($_POST['branch']),
'year' =>$_POST['year'],
'emailcode' => sha1($_POST['username'] + date()));
	
	register_data($register_data);
	header('location:regstration.php?success');
	exit();
	
	
}
else if(empty($error)===false) {
	echo output_errors($error);}




?>
<h2 style="text-decoration:underline; background-position:top; position:relative; ">Registration Form</h2><form action="" method="post">
<ul >
<li>
Username*:<br><input type="text" name="username" autocomplete="on"></li><li>
Password*:<br><input type="password" name="password" autocomplete="on"><br></li><li>
Password again*:<br><input type="password" name="password_again" autocomplete="on"><br></li><li>
First Name*:<br><input type="text" name="firstname" autocomplete="on"><br></li><li>
Last Name*:<br><input type="text" name="lastname" autocomplete="on"><br></li><li>
Email Id*:<br><input type="text" name="email" autocomplete="on"><br></li><li>
Branch*:<br><input type="text" name="branch" autocomplete="on" ><br></li><li>
year:<br><select name="year">
<option value="1">First</option>
<option value="2">Second</option>
<option value="3">Third</option>
<option value="4">Fourth</option>
</select>



</li></ul>



<input type="submit" value="Register" name="submit">

</form>

</td>
</div>
<?php
}
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';
?>



