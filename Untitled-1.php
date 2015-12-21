<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">Computer Science</li>
    <li class="TabbedPanelsTab" tabindex="0">Tab 2</li>
  </ul>
  <div class="TabbedPanelsContentGroup"><?php include 'core/init.php'; $data=mysql_query("SELECT * FROM `posts` WHERE `category`='computer' ORDER BY `posted` LIMIT 3");
while($row=mysql_fetch_assoc($data)){
	
	




?>
    <div class="TabbedPanelsContent"><div align="left" style="text-align:left; color:#000; text-decoration:underline;"><?php echo $row['heading']?>
</div>
<div align="left" style="text-align:left; color:#000;  padding-left:120px;"><?php echo $row['content']?>
</div><div align="right" style="text-align:right; color:#000; text-decoration:underline; padding-right:41px;"><?php echo "BY-".$row['firstname'].$row['lastname']?>
</div><?php }?>
</div>
    <div class="TabbedPanelsContent">Content 2</div>
  </div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>
