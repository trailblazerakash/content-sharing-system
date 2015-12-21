<?php
session_start();
error_reporting(0);
require 'database/connection.php';
require 'functions/sanitize.php';
require 'functions/users.php';
//if logged in then gettin data using funcn described in user.php
if(logged_in()===true){
	$session_id=$_SESSION['user_id'];
	
	
	
	//most important array that u can use it at any place to grab any kind of user data
	$user_data=user_data($session_id,'user_id','username','firstname','lastname','email','password','type','profile','branch','year');	
	//echo $user_data['username'];
	//control over page by disbling the usr
	if(user_active($user_data['username'])===false){
		session_destroy();
		header('location:index.php');
		
		}
	}
$error= array();



?>
