<?php
function SendSMS ($host, $port, $username, $password, $phoneNoRecip, $msgText) {
 
 
   $host - "http://www.nowsms.com/";
   $port - "Port number for the web interface";
   $username - "akash" ;
   $password - "prerna123";
  

 
   $fp = fsockopen($host, $port, $errno, $errstr);
   if (!$fp) {
      echo "errno: $errno \n";
      echo "errstr: $errstr\n";
      return $result;
   }
   fwrite($fp, "GET /?Phone=" . rawurlencode($phoneNoRecip) . "&Text=" .
    rawurlencode($msgText) . " HTTP/1.0\n");
   if ($username != "") {
      $auth = $username . ":" . $password;
      $auth = base64_encode($auth);
      fwrite($fp, "Authorization: Basic " . $auth . "\n");
   }
 
   fwrite($fp, "\n");
   $res = "";
   while(!feof($fp)) {
      $res .= fread($fp,1);
   }
   fclose($fp);
 
   return $res;
 
}
function download($register_data){
	array_walk($register_data, 'data_sanitize');
	
	print_r($register_data);
	
	$fields = '`'.implode('`,`',array_keys($register_data)).'`';
	//echo $fields;
	$data = '\''.implode('\',\'',$register_data).'\'';
	//echo $data;
	$query = 'INSERT INTO `download` ($fields) VALUES ($data)';
	//echo 'INSERT INTO `lr` '.($fields). ' VALUES '.($data) ;
	mysql_query("INSERT INTO `download` ($fields) VALUES ($data)")or die(mysql_error());
	
	
	}

function request_data($register_data){
	array_walk($register_data, 'data_sanitize');
	
	//print_r($register_data);
	
	$fields = '`'.implode('`,`',array_keys($register_data)).'`';
	//echo $fields;
	$data = '\''.implode('\',\'',$register_data).'\'';
	//echo $data;
	$query = 'INSERT INTO `notifications` ($fields) VALUES ($data)';
	//echo 'INSERT INTO `lr` '.($fields). ' VALUES '.($data) ;
	mysql_query("INSERT INTO `notifications` ($fields) VALUES ($data)")or die(mysql_error());
	
	}




function member($username)
{$query ="SELECT COUNT('user_id') FROM `members` WHERE `username`='$username'";
	
	$data =mysql_query($query);
	if(mysql_result(mysql_query($query),0)==1){return true;}else{return false;}
	
	
	}



//get usertype
function user_type($username){
	$query = "SELECT `type` FROM `lr` WHERE `username` ='$username'";
	
	$data = mysql_query($query);

while($row =mysql_fetch_assoc($data)){
	 $type[] = $row;
	
	}
	return $type['0']['type'];
	
	
	}









function getlinklist($category,$subcategory){
	
	$list =array();
 $category = sanitize($category);
 $subcategory = sanitize($subcategory);
	$query ="SELECT `name`,`path` FROM `download` WHERE `category` ='$category' AND `subcategory`='$subcategory' AND `type`='link'";
	 $data =mysql_query($query)or die(mysql_error());
	//echo $row = mysql_fetch_assoc($data);
	while($row = mysql_fetch_assoc($data)){
		
		 $list[] =$row;
		
		}
	
	return $list;
	
	
	
	
	
	}


//getting video lists
function getvideolist($category,$subcategory){
	
	$list =array();
 $category = sanitize($category);
 $subcategory = sanitize($subcategory);
	$query ="SELECT `name`,`path` FROM `download` WHERE `category` ='$category' AND `subcategory`='$subcategory' AND `type`='video'";
	 $data =mysql_query($query)or die(mysql_error());
	//echo $row = mysql_fetch_assoc($data);
	while($row = mysql_fetch_assoc($data)){
		
		 $list[] =$row;
		
		}
	
	return $list;
	
	
	
	
	
	}

//getting downloading list
function getpdflist($category ,$subcategory){$list =array();
 $category = sanitize($category);
 $subcategory = sanitize($subcategory);
	$query ="SELECT `name`,`path` FROM `download` WHERE `category` ='$category' AND `subcategory`='$subcategory' AND `type` ='pdf'";
	 $data =mysql_query($query)or die(mysql_error());
	//echo $row = mysql_fetch_assoc($data);
	while($row = mysql_fetch_assoc($data)){
		
		 $list[] =$row;
		
		}
	
	return $list;
	
	
	
	}




//query data 
function query_data($query_data){
	$branch = $query_data['queryfor'];
	$row=mysql_query("SELECT `email`,`firstname` FROM `members` WHERE `branch`='$branch'");
	while(($email = mysql_fetch_assoc($row))!=false){
		//print_r($email['email']);
		//print_r($email['firstname']);
		mail($email['email'],'QUERY RELATED',"hello". $email['firstname'] ." you have to answer this query form ".$query_data['name']."\n\n".$query_data['query'],"FROM KIET HELP PORTAL");
		
		}
	
	

	
	
	
	
	
	}
//register data for members
function register_data_members($register_data){
	array_walk($register_data, 'data_sanitize');
	//$register_data['password'] = sha1($register_data['password']);
	//print_r($register_data);
	
	$fields = '`'.implode('`,`',array_keys($register_data)).'`';
	echo $fields;
	$data = '\''.implode('\',\'',$register_data).'\'';
	echo $data;
	$query = 'INSERT INTO `members` ($fields) VALUES ($data)';
	//echo 'INSERT INTO `lr` '.($fields). ' VALUES '.($data) ;
	mysql_query("INSERT INTO `members` ($fields) VALUES ($data)")or die(mysql_error());
	
	
	//try by making another query to set active =0 and then make it 1 by activating your account
	
	
	
	
	
	//donot hold query in a variable specially for insert
	//mysql_result(mysql_query("INSERT INTO `lr` ($fields) VALUES ($data)"))or die(mysql_error());
	
	
	
	}
//email exists checking for members
function email_exists_member($email){
$username =sanitize($email);
$query = "SELECT COUNT('`user_id`') FROM `members` WHERE `email` = '$email'";
$run_query= mysql_query($query);
if(($result = mysql_result($run_query,0))){
	return true;
	}
	else{echo mysql_error();
	return false;
	}
}

function user_exists_members($username){
$username =sanitize($username);
$query = "SELECT COUNT(`user_id`) FROM `members` WHERE `username` = '$username'";
$run_query= mysql_query($query);
if(($result = mysql_result($run_query,0))){
	return true;
	}
	else{echo mysql_error();
	return false;
	}
}

//acivating users account 
function activate($email,$email_code){
	$email = mysql_real_escape_string($email);
	$email_code  =mysql_real_escape_string($email_code);
	if(mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `lr` WHERE `email` = '$email' AND `emailcode` = '$email_code' AND `active`=0"),0)==1){
		mysql_query("UPDATE `lr` SET `active` = 1 WHERE `email` = '$email' AND `emailcode` = '$email_code'");
	return true;	
		
		
		
		
		
		
		}else{return false;}
	
	
	
	
	
	
	}



//changing profile picture 
function change_profile_photo($user_id , $file_temp , $file_extn){
	//echo $file_temp;
	echo $destination_path = getcwd().DIRECTORY_SEPARATOR."<br>"; 
echo $target_path = "C:\\"."xampp\htdocs\newfolder\images\profile\\".substr( md5(time()),0,10);
if(@move_uploaded_file($destination_path, $target_path)){echo 'ok';}else{echo 'nahi';};
//$qyery = "UPDATE `lr` SET `profile`='$target_path' WHERE `user_id`='$user_id'"
mysql_query("UPDATE `lr` SET `profile`='$target_path' WHERE `user_id`='$user_id'");

}


 //is admin checking
function is_admin($user_id){
	$user_id=(int)$user_id;
	return mysql_result(mysql_query("SELECT COUNT['userid'] FROM `lr` WHERE `user_id`='$user_id' AND `type`=1"),0)==1?true:false;
	
	
	
	}





//rrecovering password
function recover($mode,$email){
	
	$mode = sanitize($mode);
	$email=sanitize($email);
	$user_data = user_data(user_id_email($email),'user_id','firstname','password','username');
	if($mode=='username'){
		mail($email,'your username','hello '.$user_data['firstname'].'\n\nyour username is '.$user_data['username'].'\n\n ~HELP PORTAL KIET','From: HELP PORTAL KIET');
		
		
		}
	else if($mode = 'password'){
		//password is a sha1 hash so take care of it
		$generated_password = substr(sha1(rand(999,999999)),0,8);
		
		change_password($user_data['user_id'] , $generated_password);
		mail($email,'your username','hello '.$user_data['firstname'].'\n\nyour password is '.$user_data['password'].'\n\nPlesae change password at first login\n\n ~HELP PORTAL KIET','From: HELP PORTAL KIET');
		
		
		}
	
	
	
	
	
	
	
	
	}
//updating userdata
function update_data($update_data){
	array_walk($update_data, 'data_sanitize');
		foreach($update_data as $key=>$value){
			$update[] = '`'.$key.'` = \''.$value.'\' ';
			// print_r($update);
			
			}//we must have to pass array to implode function
			echo implode($update);
			mysql_query("UPDATE `lr` SET". implode(', ', $update)."WHERE `user_id` =".$_SESSION['user_id']) or die(mysql_error());
	
	
//	mysql_query("INSERT INTO `lr` ($fields) VALUES ($data)")or die(mysql_error());
	
	}
//email function
/*function email($to ,$subject,$message){
	mail($to,$subject,$message,'From:HELP PORTAL KIET');
	
	}*/
//change password
function change_password($userid,$password){
	$userid=(int)$userid;
	$password = sha1($password);
	
	mysql_query("UPDATE `lr` SET `password` = '$password' WHERE `user_id` ='$userid'");}
	
	
//to protect pages
function protect_pages(){
	if(logged_in()===false){
		header('location:generic.php');exit();
		}
	}
	//admin protection
	function admin_protected(){
		global $user_data;
	if($user_data['type']==0){
		header('location:index.php');exit();
		}
	}

//logged_in redirect
function logged_in_redirect(){
	if(logged_in()===true){
		header('location:index.php');
	}
}



//register data using array walk method to prevent sql
function register_data($register_data){
	array_walk($register_data, 'data_sanitize');
	$register_data['password'] = sha1($register_data['password']);
	//print_r($register_data);
	
	$fields = '`'.implode('`,`',array_keys($register_data)).'`';
	//echo $fields;
	$data = '\''.implode('\',\'',$register_data).'\'';
	//echo $data;
	$query = 'INSERT INTO `lr` ($fields) VALUES ($data)';
	//echo 'INSERT INTO `lr` '.($fields). ' VALUES '.($data) ;
	mysql_query("INSERT INTO `lr` ($fields) VALUES ($data)")or die(mysql_error());
	if(mail($register_data['email'],'ACTIVATION OF ACCOUNT',"
	hello ".$register_data['username']."\n\nTo activate your account please go through the link:\n\n http://localhost/newfolder/activation.php?email=".$register_data['email']."&email_code=".$register_data['emailcode']."\n\nWarm Regards:"."\n\nKIET Help Portal")==true){echo 'ok';}else{echo 'mail not sent';};
	
	//try by making another query to set active =0 and then make it 1 by activating your account
	
	
	
	
	
	//donot hold query in a variable specially for insert
	//mysql_result(mysql_query("INSERT INTO `lr` ($fields) VALUES ($data)"))or die(mysql_error());
	
	
	
	}




//9counting users
function user_count(){
	return mysql_result(mysql_query("SELECT COUNT('user_id') FROM `lr` WHERE `active`=1"),0);
	
	
	}



//important function for retireving user data also dealing with variable function arguments

function user_data($user_id){
	$data =array();
	$user_id=(int)$user_id;//prevent sql injection 
	$func_num_args=func_num_args();
	$func_get_args=func_get_args();//returning array
	if($func_num_args>1){
		unset($func_get_args[0]);
		$fields='`'.implode('`,`',$func_get_args).'`';//a cool trick to get a query from a data element or say we are executing query direct from here
	$query=	"SELECT $fields FROM`lr` WHERE `user_id`='$user_id'";
	$data = mysql_fetch_assoc(mysql_query($query));
	return $data;
	
		}
	
	
	
	}












function logged_in(){
   if(isset($_SESSION['user_id'])){
	   return true;
	   }
else{
	return false;}    
    
}
function user_exists($username){
$username =sanitize($username);
$query = "SELECT COUNT('`user_id`') FROM `lr` WHERE `username` = '$username'";
$run_query= mysql_query($query);
if(($result = mysql_result($run_query,0))){
	return true;
	}
	else{echo mysql_error();
	return false;
	}
}

function email_exists($email){
$username =sanitize($email);
$query = "SELECT COUNT('`user_id`') FROM `lr` WHERE `email` = '$email'";
$run_query= mysql_query($query);
if(($result = mysql_result($run_query,0))){
	return true;
	}
	else{echo mysql_error();
	return false;
	}
}
function user_active($username){
$username =sanitize($username);
$query = "SELECT COUNT('`user_id`') FROM `lr` WHERE   `username` = '$username' AND `active`= 1";
$run_query= mysql_query($query);
if(($result = mysql_result($run_query,0))){
	return $result;
	}
	else{
		echo mysql_error();
	 return false;}
}

function user_id_username($username){
	//returning user id error was you were returning the true or false
	$username=sanitize($username);
	//$query = "SELECT `user_id` FROM `lr` WHERE `username` = '$username'";
	
	//$run_query= ;
	return  mysql_result(mysql_query("SELECT `user_id` FROM `lr` WHERE `username` = '$username'"),0,'user_id');
	
}
function user_id_email($email){
	//returning user id error was you were returning the true or false
	$email=sanitize($email);
	//$query = "SELECT `user_id` FROM `lr` WHERE `username` = '$username'";
	
	//$run_query= ;
	return  mysql_result(mysql_query("SELECT `user_id` FROM `lr` WHERE `email` = '$email'"),0,'user_id');
	
}

function login($username,$password){
	//returning user id error was you were returning the true or false
	$userid = user_id_username($username);
	$username = sanitize($username);
	$password = sha1($password);
	
	$query = "SELECT COUNT(`user_id`) FROM `lr` WHERE `username` = '$username' AND`password`='$password'";
	
	$run_query= mysql_query($query);
if( mysql_result($run_query,0)==1){
	return $userid;
	}
	else{
		echo mysql_error();
	 return false;}


	}




?>
