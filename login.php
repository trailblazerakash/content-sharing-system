<?php include 'core/init.php';

 
if(isset($_POST['login'])&&!empty($_POST['login']))
{ 
$username=$_POST['username']; 
$password=$_POST['password']; 
if(empty($username)===true||empty($password)===true){
	$error[] = 'please enter username or password';}
	else if(user_exists($username)===false){
		$error[]= 'user does not exist';
		}
		else if(user_active($username)===false){
		echo 'you havn\'t activated your account yet';
		}
		else{$login = login($username,$password);
			if($login===false){
				$error[] = 'not logged in';
				}
			else{
				$_SESSION['user_id']=$login;
				$var = $_SESSION['user_id'];
				echo $var;
				header('location:index.php');			
			}
		}
	
	//print_r($error);
	
	
}include 'includes/overall/header.php';
 ?><h2>we tried to log in but</h2>
 
 <?php 
 echo output_errors($error);
 include 'includes/overall/footer.php';?>