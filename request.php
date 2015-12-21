<?php 
include 'core/init.php';
protect_pages();
include 'includes/overall/header.php';
//checking the empty fields 
$error = array();
if(empty($_POST)===false){
if(isset($_POST['submit'])){
	$required_fields= array('firstname','email','branch','year');
	foreach($_POST as $key=>$value){
		if(empty($value)&&in_array($key,$required_fields)===true){
			$error[] = 'Fields Marked with Aiersticks are compulsory';
			break;
			}
		
		}
	
	
	}
	//if user name exists then show error
	if(empty($errors)=== true){
		
	
	//function for checking spaces in user name
	//filtering email addres usin special constant
	
	
	
	
	
	
	}
	}
	
?>
<div align="justify" style="alignment-adjust:hanging"><td><?php
if(isset($_GET['success'])&&empty($_GET['success'])){
	echo '<div align="center"><h2>you have send request successfully</h2></div>';}
	else{
if(empty($_POST)=== false && empty($error)=== true){
	$register_data = array(
'firstname' =>$_POST['firstname'],
'lastname' =>$_POST['lastname'],
'email' =>$_POST['email'],
'branch' =>$_POST['branch'],
'year' =>$_POST['year'],
'notification' =>$_POST['notification'], 
'type' =>"request"
);
	
	request_data($register_data);
	header('location:request.php?success');
	exit();
	
	
}
else if(empty($error)===false) {
	echo output_errors($error);}




?>
<h2 style="text-decoration:underline; background-position:top; position:relative; ">Request Form</h2><form action="" method="post">
<ul style="display:inherit; text-decoration:none" type="*">
<li>

First Name*:<br><input type="text" name="firstname"><br></li><li>
Last Name*:<br><input type="text" name="lastname"><br></li><li>
Email Id*:<br><input type="text" name="email"><br></li>
<li>
Enter University roll no*:<br><input type="text" name="email"><br></li>
<li>
Branch*:<br><select name="branch">
<option value="CSE">CSE</option>
<option value="EC">Ec</option>
<option value="EN">EN</option>
<option value="EI">EI</option>
<option value="CIVIL">CIVIL</option><option value="ME">ME</option><option value="IT">IT</option>
</select></li><li>
year:<br><select name="year">
<option value="1">First</option>
<option value="2">Second</option>
<option value="3">Third</option>
<option value="4">Fourth</option>
</select>



</li></ul>

Request:<textarea name="notification" rows="3" cols="80" ></textarea>

<input type="submit" value="Send Request" name="submit">

</form>

</td>
</div>
<?php
}
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';
?>



