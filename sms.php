<?php

$username='kaushikdhruv003@gmail.com';
$password='Dmanuk123';

//get from data
if(isset($_POST['numberext'])&&isset($_POST['number'])&&isset($_POST['from'])&&isset($_POST['message'])
&&isset($_POST['submitted'])&&isset($_POST['submit']))
{

$number=$_POST['numberext'].$_POST['number'];
$from=$_POST['from'];
$message=$_POST['message'];

echo $vars="uname=".$username." &pword=".$password." &message=".$message." &from=".$from."
&selectednums=".$number." &info=1 &test=0";

if($_POST['submitted']==true)
{
	$curl=curl_init('http://www.txtlocal.com/sendsmspost.php');
	curl_setopt($curl,CURLOPT_POST,true);
	curl_setopt($curl,CURLOPT_POSTFIELDS,$vars);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	if($result=curl_exec($curl)){
		echo 'ok';
		};
	curl_close($curl);
	
	
}
}
?>
<form action="sms.php" method="POST">
Number:<br><br>
<input type="text" size="2" name="numberext"> - <input type="text" name="number">
<br><br>
Sender:<br>
<input type="text"  name="from">
<br><br>
Message:
<br>
<textarea name="message"></textarea>
<br>
<input type="hidden" name="submitted" value="true">
<input type="submit" name="submit" value="Send">
</form>

<?php



?>