<?php
$connection_error="database couldn't connected";
mysql_connect('localhost','root','')or die($connection_error);
mysql_select_db('lr')or die($connection_error);

?>