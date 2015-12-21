<?php 
include 'core/init.php';//protect_pages();
include 'includes/overall/header.php';
if(empty($_POST)===false&&isset($_POST)===true){if(isset($_POST['submit'])===true){$key =$_POST['path'];
	mysql_query("INSERT INTO `complaint` (`path`) VALUES ('$key')") ;
	header('location:#');
	exit();
	
}
	
	}
?>
<style>
div{font-family:Georgia, 'Times New Roman', Times, serif; font-style:italic;}
h3{
	text-decoration:underline;}
	h4{
	text-decoration:none;}
	ul{
		
		list-style:hebrew;}
		a{
			text-decoration:none;}



</style>

<td valign="top"><div align="center"><h1>Hey something is here for You </h1></div><div align="left">
<h3>Algorthims</h3><br><?php $lists =getpdflist('CSE','Algorthim'); 

echo '<ul>';
 foreach($lists as $value){
?>
<li><a href="<?php echo($value['path']);?>"> <img src="images/pdf.jpg" height="30" width="30" /><label><?php echo      ($value['name']);  ?>  <label> <br /><br /><form action="" method="post">
<input type="hidden" name="path" value="<?php echo $value['path']?>" />
<input type="submit" name="submit" value="Report this" / style="text-decoration:none; "></form> </a></li>




<?php }
echo '</ul>';
 ?>
<h4>Video Links</h4>
<?php $lists =getvideolist('CSE','Algorthim'); 

echo '<ul>';
 foreach($lists as $value){
?>
<li><a href="<?php echo($value['path']);?>"><img src="images/videos.jpg" height="30" width="30" /><label> <?php echo      ($value['name']);  ?>    </label> <br /><br /><form action="deletepost.php" method="post">
<input type="hidden" name="<?php echo $value['path']?>" />
<input type="submit" name="submit" value="Report this" / style="text-decoration:none; "></form></a></li>




<?php }
echo '</ul>';

 ?>
<h4>Other Links</h4>
<?php $lists =getlinklist('CSE','Algorthim'); 

echo '<ul>';
 foreach($lists as $value){
?>
<li><a href="<?php echo($value['path']);?>"><img src="images/links.jpg" height="30" width="30" /><label> <?php echo      ($value['name']);  ?>   </label>  <br /><br /><form action="deletepost.php" method="post">
<input type="hidden" name="<?php echo $value['path']?>" />
<input type="submit" name="submit" value="Report this" / style="text-decoration:none; "></form></a></li>




<?php }

 ?>


<h3>Linux</h3><br><?php ;
$lists= getpdflist('CSE','Linux');
 
 echo '<ul>';
 foreach($lists as $value){
?>
<li><a href="<?php echo($value['path']);?>"><img src="images/pdf.jpg" height="30" width="30" /><label><?php echo      ($value['name']);  ?>  <label>  </a></li>



<?php }
echo '</ul>';?>
<h4>Video Links</h4>
<?php $lists =getvideolist('CSE','Linux'); 

echo '<ul>';
 foreach($lists as $value){
?>
<li><a href="<?php echo($value['path']);?>"> <img src="images/videos.jpg" height="30" width="30" /><label> <?php echo      ($value['name']);  ?>    </label> <br /><br /><form action="deletepost.php" method="post">
<input type="hidden" name="<?php echo $value['path']?>" />
<input type="submit" name="submit" value="Report this" / style="text-decoration:none; "></form></a></li>




<?php }
echo '</ul>';

 ?>
 <h4>Other Links</h4>
<?php $lists =getlinklist('CSE','Linux'); 

echo '<ul>';
 foreach($lists as $value){
?>
<li><a href="<?php echo($value['path']);?>"> <img src="images/links.jpg" height="30" width="30" /><label> <?php echo      ($value['name']);  ?>   </label> <br /><br /><form action="deletepost.php" method="post">
<input type="hidden" name="<?php echo $value['path']?>" />
<input type="submit" name="submit" value="Report this" / style="text-decoration:none; "></form></a></li>




<?php }

 ?>

<h3>Object Oriented</h3><br><?php ;
$lists= getpdflist('CSE','OO');
 
 echo '<ul>';
 foreach($lists as $value){
?>
<li><a href="<?php echo($value['path']);?>"> <img src="images/pdf.jpg" height="30" width="30" /><label><?php echo      ($value['name']);  ?>  <label>  <br /><br /><form action="deletepost.php" method="post">
<input type="hidden" name="<?php echo $value['path']?>" />
<input type="submit" name="submit" value="Report this" / style="text-decoration:none; "></form> </a></li>




<?php }
echo '</ul>';?>
<h4>Video Links</h4>
<?php $lists =getvideolist('CSE','OO'); 

echo '<ul>';
 foreach($lists as $value){
?>
<li><a href="<?php echo($value['path']);?>"> <img src="images/videos.jpg" height="30" width="30" /><label> <?php echo      ($value['name']);  ?>    </label> <br /><br /><form action="deletepost.php" method="post">
<input type="hidden" name="<?php echo $value['path']?>" />
<input type="submit" name="submit" value="Report this" / style="text-decoration:none; "></form></a></li>




<?php }
echo '</ul>';

 ?>
 <h4>Other Links</h4>
<?php $lists =getlinklist('CSE','OO'); 

echo '<ul>';
 foreach($lists as $value){
?>
<li><a href="<?php echo($value['path']);?>"> <img src="images/links.jpg" height="30" width="30" /><label> <?php echo      ($value['name']);  ?>   </label> <br /><br /><form action="deletepost.php" method="post">
<input type="hidden" name="<?php echo $value['path']?>" />
<input type="submit" name="submit" value="Report this" / style="text-decoration:none; "></form></a></li>




<?php }

 ?>

</div>
<div align="center">
<h3>Do you Also want to share something!!!</h3>
<h2>If yes !! <a href="contentshare.php">Just come in!!</a></h2>



</div>




</td>
<?php
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';?>
