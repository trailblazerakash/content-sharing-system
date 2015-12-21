 <td width="25%" id="explore" >
 
<button id="btn1" value="Click Me">Explore Here !</button>
   
 <div id="login">
<?php

 if(logged_in()===true){include 'includes/widgets/loggedin.php';}
   else{ echo '<h1><img class="css_zoom_image" src="images/login.png"><img class="img-zoom" src="images/login.png"></h1><hr/>' ;//printing in table data
   include 'includes/widgets/login.php';
  }?>
   
  <?php include 'includes/widgets/usercount.php';?> 
  </div>
   </td>
   
   
  
	