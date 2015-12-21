<?php 
include 'core/init.php';
include 'includes/overall/header.php';
$error = array();
if(empty($_POST)===false){
if(isset($_POST['submit'])){
		// Authorisation details.
		$username = "kaushikdhruv003@gmail.com";
		$hash = "8c744140cb93d39c0fae29be540cb66cdc8036c9";

		// Configuration variables. Consult http://api.txtlocal.com/docs for more info.
		$test = "0";

		// Data for text message. This is the text message data.
		$sender = "HELP PORTAL"; // This is who the message appears to be from.
		$numbers = "+917839016531"; // A single number or a comma-seperated list of numbers
		$message = "This is a test message from the HELP PORTAL.";
		// 612 chars or less
		// A single number or a comma-seperated list of numbers
		$message = urlencode($message);
		$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
		$ch = curl_init('http://api.txtlocal.com/send/?');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		echo $result = curl_exec($ch); // This is the result from the API
		curl_close($ch);
		echo 'ok';
	$register_data = array(

'firstname' =>$user_data['firstname'],
'lastname' =>$user_data['lastname'],
'email' =>$user_data['email'],
'branch' =>$user_data['branch'],
'year' =>$user_data['year'],
'type' =>'message', 
'notification'=>$_POST['notification']);
	
	request_data($register_data);
	header('location:message.php');
	exit();
	
	
	
}}
if(isset($_post['submit'])===true){
	
	 if (isset($_post['notification'])===true&&empty($_post['notification'])===false) {$branch =$user_data['branch'];$no= array();
		 $query = "SELECT COUNT('user_id') FROM `members` WHERE `branch`='$branch'";
		 $data =mysql_query($query);
		 while($row=mysql_fetch_assoc($data)){
			 $no[]= $row['mobile'];
			 
			 }
		 $phone=implode(',',$no);
		 
		 
		 
		 
      $x = SendSMS("127.0.0.1", 8800, "akash", "prerna123", $phone, 
                    $_REQUEST['notification']);
      echo $x;
   }
   else {
      echo "ERROR : Message not sent -- Text parameter is missing!\r\n";
   }
}
else {
   echo "ERROR : Message not sent -- Phone parameter is missing!\r\n";
}

?>
<td><div align="left" style="padding:20px"><h1>Messages</h1>   </div>

<?php 

$query ="SELECT * FROM `notifications` WHERE `type`='message'";
$data=mysql_query($query); 
while($row=mysql_fetch_assoc($data)){


?><?php echo  '<div align="left" style="padding:20px">'.$row['notification'].'<br>';?>
 by <?php echo $row['firstname'].'('.$row['email'].')<br></div>'?>
<?php }?>
<div align="left" style="padding:20px"><h1>Requests</h1>   </div>

<?php 

$query ="SELECT * FROM `notifications` WHERE `type`='request'";
$data=mysql_query($query); 

while($row=mysql_fetch_assoc($data)){


?><?php echo '<div align="left" style="padding:20px">'.$row['notification'].'<br>';?>
 by <?php echo $row['firstname'].'('.$row['email'].')<br></div>'?>
<?php }?>


<hr>
<form action="" method="post">

<span>MESSAGE:</span><textarea name="notification" rows="6" cols="30"></textarea>
<input type="submit" name="submit" value="Send">



</form>







</td>
<?php
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';?>

