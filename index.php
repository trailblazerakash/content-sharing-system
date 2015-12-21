<?php 
include 'core/init.php';
include 'includes/overall/header.php';

?><style>box h3{
	text-align:left;
	position:relative;
	top:80px;
}
.box {
	width:70%;
	height:auto;
	background:#FFF;
	margin:40px auto;
	color:#000;
	
}

/*==================================================
 * Effect 6
 * ===============================================*/
.effect6
{
  	position:relative;       
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}
.effect6:before, .effect6:after
{
	content:"";
    position:absolute; 
    z-index:-1;
    -webkit-box-shadow:0 0 20px rgba(0,0,0,0.8);
    -moz-box-shadow:0 0 20px rgba(0,0,0,0.8);
    box-shadow:0 0 20px rgba(0,0,0,0.8);
    top:50%;
    bottom:0;
    left:10px;
    right:10px;
    -moz-border-radius:100px / 10px;
    border-radius:100px / 10px;
}</style>
<?php if(logged_in()===true){
	//show blogs to all
?><td valign="top" ><div  style="overflow-y:scroll;max-height:1000px;">
<div align="left" style="font-size:30px; text-decoration:underline; padding:10px;color:#000">Computer Science</div>
<?php $data=mysql_query("SELECT * FROM `posts` WHERE `category`='computer' ORDER BY `posted` LIMIT 3");
while($row=mysql_fetch_assoc($data)){
	
	




?>






<div class="box effect6">
	<h3><?php echo $row['heading'];?></h3>
    									<div align="center" style="color:#666"><?php echo $row['content'];?></div>
                                        							<div align="right" style="color:#999; padding:12px"><?php echo $row['firstname'].$row['lastname']?></div>
    
    
    
    
    
</div>

<?php }?>




<hr style=" border:groove thin" />
<div align="left" style="font-size:30px; text-decoration:underline; padding:10px;color:#000">Electronics</div><?php $data=mysql_query("SELECT * FROM `posts` WHERE `category`='Electronics' ORDER BY `posted` LIMIT 3");
while($row=mysql_fetch_assoc($data)){
	
	




?>



<div class="box effect6">
	<h3><?php echo $row['heading'];?></h3>
    									<div align="center" style="color:#666"><?php echo $row['content'];?></div>
                                        							<div align="right" style="color:#999; padding:12px"><?php echo $row['firstname'].$row['lastname']?></div>
    
    
    
    
    
</div>
<?php }?><hr style=" border:groove thin" />
<div align="left" style="font-size:30px; text-decoration:underline; padding:10px;color:#000">Electrical	</div><?php $data=mysql_query("SELECT * FROM `posts` WHERE `category`='Electrcal' ORDER BY `posted` LIMIT 3");
while($row=mysql_fetch_assoc($data)){
	
	




?>



<div class="box effect6">
	<h3><?php echo $row['heading'];?></h3>
    									<div align="center" style="color:#666"><?php echo $row['content'];?></div>
                                        							<div align="right" style="color:#999; padding:12px"><?php echo $row['firstname'].$row['lastname']?></div>
    
    
    
    
    
</div>
<?php }?><hr style=" border:groove thin" />
<div align="left" style="font-size:30px; text-decoration:underline; padding:10px;color:#000">Information Technology</div><?php $data=mysql_query("SELECT * FROM `posts` WHERE `category`='Information' ORDER BY `posted` LIMIT 3");
while($row=mysql_fetch_assoc($data)){
	
	




?>



<div class="box effect6">
	<h3><?php echo $row['heading'];?></h3>
    									<div align="center" style="color:#666"><?php echo $row['content'];?></div>
                                        							<div align="right" style="color:#999; padding:12px"><?php echo $row['firstname'].$row['lastname']?></div>
    
    
    
    
    
</div>
<?php }?><hr style=" border:groove thin" />
<!--<div  style="overflow-y:scroll;max-height:600px;">-->
<div align="left" style="font-size:30px; text-decoration:underline; padding:10px;color:#000">Mechanical</div><?php $data=mysql_query("SELECT * FROM `posts` WHERE `category`='Mechanical' ORDER BY `posted` LIMIT 3");
while($row=mysql_fetch_assoc($data)){
	
	




?>



<div class="box effect6">
	<h3><?php echo $row['heading'];?></h3>
    									<div align="center" style="color:#666"><?php echo $row['content'];?></div>
                                        							<div align="right" style="color:#999; padding:12px"><?php echo $row['firstname'].$row['lastname']?></div>
    
    
    
    
    
</div>
<?php }?><!--</div>--><hr style=" border:groove thin" />
<!--<div  style="overflow-y:scroll;max-height:600px;">-->
<div align="left" style="font-size:30px; text-decoration:underline; padding:10px;color:#000">Technology Trends</div><?php $data=mysql_query("SELECT * FROM `posts` WHERE `category`='Technology' ORDER BY `posted` LIMIT 3");
while($row=mysql_fetch_assoc($data)){
	
	




?>


<div class="box effect6">
	<h3><?php echo $row['heading'];?></h3>
    									<div align="center" style="color:#666"><?php echo $row['content'];?></div>
                                        							<div align="right" style="color:#999; padding:12px"><?php echo $row['firstname'].$row['lastname']?></div>
    
    
    
    
    
</div>
<?php }?><!--</div>--><hr style=" border:groove thin" />
</div><!--<div  style="overflow-y:scroll;max-height:600px;">
--><div align="left" style="font-size:30px; text-decoration:underline; padding:10px;color:#000">New Achievments</div><?php $data=mysql_query("SELECT * FROM `posts` WHERE `category`='New' ORDER BY `posted` LIMIT 3");
while($row=mysql_fetch_assoc($data)){
	
	




?>



<div class="box effect6">
	<h3><?php echo $row['heading'];?></h3>
    									<div align="center" style="color:#666"><?php echo $row['content'];?></div>
                                        							<div align="right" style="color:#999; padding:12px"><?php echo $row['firstname'].$row['lastname']?></div>
    
    
    
    
    
</div>
<?php }?><hr style=" border:groove thin" />
</div>

</div>
</td>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<?php }else{?>







<td id="ind">
    <!--<div id="notice" align="center">
  		<h2>updates</h2>    
    </div>
-->
	<div id="about">
        <b style="color:#666"><i>About Us</i>:-</b>
        <p style="text-indent:70px; color:#039">
        <dfn>Department of Computer Science Engineering is accredited by NBA from January'2013 for two years. The Department executes 4 years B.Tech. Degree Course. It is having state of art & world class infrastructure facilities, with a clear aim to be known as the best department in CSE among all other Indian reputed colleges. As a wealth the department is having strong team of faculty members with high dedication towards their commitment. The pass out students of the department are performing extremely well in almost-all the leading organization and making the name of the department brighter. Accreditation Letter By NBA</dfn>
        </p>
    </div>
</td><?php }?>
<?php
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';?>



