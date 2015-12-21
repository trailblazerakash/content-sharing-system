<?php 
include 'core/init.php';
include 'includes/overall/header.php';

?>
<td>
<div align="left" style="padding:20px"><h1>Messages</h1>   </div>

<?php 

$query ="SELECT * FROM `notifications` WHERE `type`='message'";
$data=mysql_query($query); 
while($row=mysql_fetch_assoc($data)){


?><?php echo  '<div align="left" style="padding:20px">'.$row['notification'].'<br>';?>
 by <?php echo $row['firstname'].'('.$row['email'].')<br></div>'?>
<?php }?>
<div align="left" style="padding:20px"><h1>Requests</h1>   </div>



</td>
<?php
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';?>