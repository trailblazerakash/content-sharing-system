<?php 
include 'core/init.php';
//logged_in_redirect();
include 'includes/overall/header.php';
//checking the empty fields 
$error = array();
if(empty($_POST)===false){
if(isset($_POST['submit'])){
	$required_fields= array('name','category','filename','filelink','filetype','subcategory');
	foreach($_POST as $key=>$value){
		if(empty($value)&&in_array($key,$required_fields)===true){
			$error[] = 'All fields are compulsory';
			break;
			}
		
		}
	
	
	}
	//if user name exists then show error
	if(empty($errors)=== true){
		
	
	
	
	
	
	}
	}
	
?>
<div align="justify" style="alignment-adjust:hanging"><td><?php
if(isset($_GET['success'])&&empty($_GET['success'])){
	echo '<div align="center"><h2>you have Shared successfully</h2></div>';}
	else{
if(empty($_POST)=== false && empty($error)=== true){
	$register_data = array('name' =>$_POST['filename'],
'category' =>$_POST['category'],
'path' =>$_POST['filelink'],
'type' =>$_POST['filetype'],
'subcategory' => $_POST['subcategory']);
	
	download($register_data);
	header('location:contentshare.php?success');
	exit();
	
	
	
}
else if(empty($error)===false) {
	echo output_errors($error);}




?>
<h2 style="text-decoration:underline; background-position:top; position:relative; ">Share the content</h2><form action="" method="post">
<label>Username</label><input type="text" name="username" /><br /><br />
<label>choose your category</label><select name="category">
<option value="CSE">Computer Science</option>
<option value="EC">Electronics and communication</option>
<option value="EN">Electrical Engineering</option>
<option value="ME">Mechanical Engineering</option>



</select>
<br /><br />


<label>Filename</label><input type="text" name="filename" /><br /><br />

<label>File type</label><select name="filetype">
<option value="pdf">PDF</option>
<option value="video">VIDEO</option>
<option value="link">LINK</option>



</select><br /><br /><label>Topics</label><select name="subcategory">
<option value="Algorthim">Algorthim</option>
<option value="Linux">Linux</option>
<option value="OO">Object Oriented</option>
<option value="others">Something Else</option>



</select><br /><br />

File Link <input type="text" name="filelink" />
<br /><br />
<input type="submit" value="share the content" />


</form>


</td>
</div>
<?php
}
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';
?>



<?php 
include 'core/init.php';protect_pages();
include 'includes/overall/header.php';

?>
<td>also make a member protect pages
</td>
<?php
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';?>



