<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style></head>

<body>
<div style="width:600px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">
<div style="background-color:#ff3300; height:40px; margin-bottom:10px;">
<div style="float:right; width:50px; margin-right:20px; background-color:#cccccc; text-align:center;"><a href="home_admin.php">back</a></div>
<div style="float:left; margin-left:10px; margin-top:10px;"><?php echo $_SESSION['SESS_FIRST_NAME'];?></div>
</div>
<br /><br />

<form action="salesreport.php" method="post">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
From: <input name="dayfrom" type="text" class="tcal" />&nbsp;&nbsp;&nbsp;
To: <input name="dayto" type="text" class="tcal" />&nbsp;&nbsp;&nbsp;
<input name="" type="submit" value="Search" /></form>
<br />
</div>
</body>
</html>
