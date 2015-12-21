



<h3>hello <?php echo $user_data['firstname'];?>!</h3>
<div>
<div >
<?php
if(isset($_FILES['profile'] )=== true){
	if(empty($_FILES['profile']['name'])===false){
		$allowed =array('jpg','jpeg','png','gif');//print_r($allowed);
		$file_name = $_FILES['profile']['name'];
		$file_extn = strtolower(end(explode('.',$file_name)));
		$file_temp = $_FILES['profile']['tmp_name'];
		if(in_array($file_extn,$allowed)===true){
			
			change_profile_photo($_SESSION['user_id'],$file_extn,$file_temp);
			//header('loctaion:index.php');
			//exit();
			
			
	  
			}else{
			echo 'allowed types are : '.implode(', ' ,$allowed);
			
			
			}
		
		
		
		}else{
		echo 'Please chosse a file';
		
		}
	
	
	}
if($user_data['profile']===false){
	echo "<div>
	<img src=".$user_data['profile']. "alt=".$user_data['firstname'].">
	
	</div>";
	
	
	}
	else {/*
	
	
	*does not displaying anything here
	
	*/
		//echo '<form action="" method="post" enctype="multipart/form-data">
		
		//<input type="file" name="profile">
		//<br><br>
		//<input type="submit" value ="update">
		
		
		
		
	//	</form>';
		
		}



?>



</div>
<ul><li>
<a href="logout.php">Log Out</a>


</li>

<li>
<a href="change_password.php">Change Your Password</a>


</li>

<li>
<a href="settings.php">Change your Account Details</a>


</li>
<li>
<a href="<?php echo $user_data['username'] ?>">Profile</a>


</li>

</ul>



</div>

