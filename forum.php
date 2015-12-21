<?php 

include 'core/init.php';
protect_pages();
include 'includes/overall/header.php';

?>

<?php
if(user_exists_members($user_data['username'])===false){$data ="Baskerville Old Face";
	echo'<td><div align="center">
		<h1 style="font-family:'.$data.'; font-size:60px; text-shadow:0px 5px 2px #CCC; color:#900">Forum</h1></div>
        		<ul><li>
            <a href="notifications.php" style="text-decoration:none;">Notifications</a></li>
            	<li>
				<a href="emails.php" style="text-decoration:none">members email address </a></div></li>
                <li><a href="messageforstudents.php" style="text-decoration:none ">Member messages</a></li>
                </ul></td>';
	 
}
else if(user_exists_members($user_data['username'])){
	echo'<td><div align="center">
	<h1>Forum</h1></div><div align ="left"><h3><ul><li><a href="notifications.php">Notifications</a>
</li>	
</li>	 <li><a href="contentshare.php">share content with users </a>
</li>		 <li><a href="list.php">Details of all users</a>
</li>	<li><a href="addblog.php" style="text-decoration:none">Add A Blog</a></li><li><a href="profile.php" style="text-decoration:none">Check Your Profile Details </a>


</li> 
<li><a href="delete.php" style="text-decoration:none">Delete Some Blog </a>
<li><a href="message.php" style="text-decoration:none ">Share some message to Students</a></li>




</h3>	 </div></td>';
	
	
	
	}
else if(user_type($user_data['username'])==2){
	
	 
	echo'<td><div align="center">
	<h1>Forum</h1></div><div align ="left"><h3><ul><li><a href="notifications.php">Notifications</a>
</li>	
</li>	 <li><a href="contentshare.php">share content with users </a>
</li>	 <li><a href="delete.php">Delete a post</a>
</li>	 <li><a href="list.php">Details of all users</a>
</li>	</h3>	 </div></td>';
	
	
	
	
	}


?>








<?php
include 'includes/aside.php';
?>
<?php include 'includes/overall/footer.php';?>
