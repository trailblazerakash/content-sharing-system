<?php 
include 'core/init.php';
include 'includes/overall/header.php';

?>
<td><?php
if(isset($_POST['submit'])===true){$key =$_POST['path'];
	mysql_query("DELETE FROM `download` WHERE `path`='$key'");
	header('location:#');
	
	
	
	
	}?>
<?php 

$query ="SELECT * FROM `complaint` ";
$data=mysql_query($query); 

while($row=mysql_fetch_assoc($data)){


?><?php echo '<div align="left" style="padding:20px">'.$row['path'].'<br>';?>
 </div>
<?php }?>






<form method="post" action="">
Enter the Path:<input type="text" name="path">
<input type="submit" name="submit" value="Delete post">


</form>







</td>
<?php
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';?>

