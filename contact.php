<?php 
include 'core/init.php';
include 'includes/overall/header.php';

?><style>form {
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
				}</style>
<?php 
$error = array();
if(empty($_POST)===false){
if(isset($_POST['submit'])){
	$required_fields= array('name','branch','queryfor','query','email','year');
	foreach($_POST as $key=>$value){
		if(empty($value)&&in_array($key,$required_fields)===true){
			$error[] = 'Fields Marked with Aiersticks are compulsory';
			break;
			}
		
		}
	
	
	}
}


?>
<td valign="top"><?php 
if(isset($_GET['success'])&&empty($_GET['success'])){
	echo '<div align="center"><h2>you have submitted query successfully</h2></div>';}
	else{
if(empty($_POST)=== false && empty($error)=== true){
	$query_data = array('name' =>$_POST['name'],
'branch' =>$_POST['branch'],
'queryfor' =>$_POST['queryfor'],
'query' =>$_POST['query'],
'email' =>$_POST['email'],
'branch' =>$_POST['branch'],
'year' =>$_POST['year'],
);
	print_r($query_data);
	query_data($query_data);
	header('location:contact.php?success');
	exit();
	
	
}
else if(empty($error)===false) {
	echo output_errors($error);}




?> 
<div align="left" style="padding:20px; margin-left:30px; height:60px;" onmouseover="JOIN US AND HELP OTHERS">
<?php 
if(member($user_data['username'])===true){
	?><a href="members_form.php" style="text-decoration:none"> <h3>Join a member</h3></a>

	<?php }else {
		?><a href="request.php" style="text-decoration:none"> <h3>Send Request to Join us as member</h3></a>
		<?php
		
		}?>

?>



</div>
<div align="center" ><h1>Contact Us</h1></div>





<br /><br />
<div align="left" style="padding:20px; margin-left:30px;">
<form action="" method="post">
<ol><li><label>NAME*</label>
<input type="text" name="name" /></li><br><br>
<li><label>
BRANCH*</label>
<select name="branch">
<option value="CSE">CSE</option>
<option value="EC">EC</option>
<option value="EN">EN</option>
<option value="EI">EI</option>
<option value="CIVIL">CIVIL</option><option value="ME">ME</option><option value="IT">IT</option>
</select></li><br><br>
<li><label> 
QUERY RELEATED TO BRANCH*</label>
<select name="queryfor">
<option value="CSE">CSE</option>
<option value="EC">EC</option>
<option value="EN">EN</option>
<option value="EI">EI</option>
<option value="CIVIL">CIVIL</option><option value="ME">ME</option><option value="IT">IT</option>
</select></li><br><br>
<li>
<label>
EMAIL*</label>
<input type="text" name="email" /></li><br><br>
<li>
<label>year*:</label><select name="year">
<option value="1">First</option>
<option value="2">Second</option>
<option value="3">Third</option>
<option value="4">Fourth</option>
</select></li><br><br><li><label>
QUERY*</label>
<textarea name="query" rows="4" cols="30" ></textarea></li><br><br><li><input type="submit" name="Submit" />
</li><br><br></ol>
</form>





</div>




</td>
<?php }
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';?>
