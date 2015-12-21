<?php 
include 'core/init.php';
include 'includes/overall/header.php';

?><style><style>box h3{
	text-align:left;
	position:relative;
	top:20px;
}
.box {
	width:70%;
	height:auto;
	background:#FFF;
	margin:20px auto;
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
<td>
<div align="left" style="padding:20px; color:#333; font-family:Georgia, 'Times New Roman', Times, serif;"><h1>Messages</h1>   </div>
<div style="overflow-y:scroll;max-height:400px">
<?php 

$query ="SELECT * FROM `notifications` WHERE `type`='message'";
$data=mysql_query($query); 
while($row=mysql_fetch_assoc($data)){


?>



<div class="box effect6">
	
    									<div align="left" style="color:#666; padding:12px;"><?php echo $row['notification'];?></div>
                                        							<div align="right" style="color:#999; padding:12px"><?php echo $row['firstname'].$row['lastname']?></div>
    
    
    
    
    
</div>
<?php }?>
</div>





</td>
<?php
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';?>

