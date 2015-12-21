<?php 
include 'core/init.php';
include 'includes/overall/header.php';

?><style>
#style{alignment-adjust:auto;
padding:10px;
margin-left:30px;}


</style>
<td valign="top"> 
<div align="center"><h1> Choose Your Category </h1></div>
<div align="left">

<?php   $data = mysql_query("SELECT `category` FROM `categories`"); 
while($row=mysql_fetch_assoc($data)){
	echo '<div id="style"><a href="readblog.php?'.htmlspecialchars($row['category']).'">'.$row['category'].'</a><br><br></div>';
	
	
	
	
	}

?>

<?php 
if(isset($_GET)===true&&empty($_GET)===false){
	print_r($_GET);
	
	echo $category =(key($_GET));
	
	
	
	}




?>


</div>




</td>
<?php
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';?>




