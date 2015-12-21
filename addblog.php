<?php 
include 'core/init.php';
include 'includes/overall/header.php';
//display_errors(1);
?>
<?php

//validation required
if(isset($_POST)===true){
	
	
	
	if(empty($_POST)===false){
		
		
		
	
	
	
		
		
		$title = mysql_real_escape_string($_POST['heading']);
		$body = htmlentities(mysql_real_escape_string($_POST['content']));
		$category =htmlspecialchars($_POST['category']);
	$firstname=	$user_data['firstname'];$lasttname=	$user_data['lastname'];
		$user_id = $user_data['user_id'];
		$posted = date("Y-m-d h:i:s A<br>", time());
		$query = "INSERT INTO `posts` ( `user_id`, `heading`, `content`, `category`, `firstname`, `lastname`, `posted`) VALUES ('$user_id','$title','$body','$category','$firstname','$lasttname','$posted')";
		mysql_query($query)or die("mysql_error()");
		header ("location:addblog.php?success");
		
		
		
		
		}
	
	
	
	
	}

	
?>
<?php if(isset($_GET['success'])&&empty($_GET['success'])){
	
echo "<td><div align='center'> <h1>You have shared your thought successfully <br>Thank you          <h1> </div> </td>    ";	
	
	}
elseif(empty($error)===false){
	echo output_errors($error);
}
else{	
?>







<td valign="top"><div align="center"
><h1>Add a blog</h1></div><div align="left"> 
<form 
action="" method="post">
Add a title:<br><input type="text" name="heading"><br><br>
Add body:<br><textarea rows='20' cols="60" name="content"></textarea><br><br>
Add in category:<br />
<select name="category">
<?php 
$query="SELECT * FROM `categories`";
$data = mysql_query("SELECT * FROM `categories`");
while($row=mysql_fetch_assoc($data)){


echo '<option value='.htmlspecialchars($row['category']).'>'. htmlspecialchars($row["category"]) . '</option>';
}

?>



</select><br><br>


<input type="submit" value="Add blog">
</form>


   </div>







</td><?php 
include 'includes/aside.php';}
?>

<?php include 'includes/overall/footer.php';?>