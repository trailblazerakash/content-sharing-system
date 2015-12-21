<?php 
include 'core/init.php';
include 'includes/overall/header.php';

?>
<?php 
 if(isset($_GET['success'])&&empty($_GET['success'])){
	echo '<div align="center"><h2>you have Recoverd successfully</h2></div>';
	echo '<br><br><a href="index.php">GO back to home</a>';
	
	
	}else{
$mode_allowed=array('username','password');
if(isset($_GET['mode'])===true&&in_array($_GET['mode'],$mode_allowed)===true){
	if(isset($_POST['email'])===true&&empty($_POST['email'])===false){
		if(email_exists($_POST['email'])===true){
			
			recover($_GET['mode'],$_POST['email']);			
			header('location:recover.php?success');
			exit();
			}
		else{
			echo 'Oops We couldn\'t find email address'; 
			}
		
		
		}
	
	
	
	}





?> 
<td valign="top"><div style="margin-left:20px;
padding-left:5px; font-family:Georgia, 'Times New Roman', Times, serif; margin-top:35px; font-weight:500"><h2>Recover page</h2>
<form action="" method="post">
Please enter your Email address:<br><br>
<input type="text" name="email"><br><br>
<input type="submit" value="submit">




</form>



</div>
</td>
<?php 
include 'includes/aside.php';}
?>

<?php include 'includes/overall/footer.php';?>



