<?php 
include 'core/init.php';
include 'includes/overall/header.php';

?>
<td>
<div align="left" style="padding:20px"><h1>Name and Email Of members</h1>   </div>
<div style="overflow-y:scroll;max-height:800px"><div><?php 

$query ="SELECT * FROM `members`";
$data=mysql_query($query); 
while($row=mysql_fetch_assoc($data)){


?><div  style="width:100%"> <div align="left" style="padding-left:10px; width:50%"><?php echo $row['firstname'].$row['lastname'];?></div><div align="right" style="padding-right:10px; width:50%"><?php echo $row['email'];?></div></div><?php }?></div>



</td>
<?php
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';?>

