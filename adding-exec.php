<?php
session_start();

include('config.php');
$ingname=$_POST['ingname'];

mysql_query("INSERT INTO inventory (name) VALUES('$ingname')");
header("location: inventory.php");
mysql_close($con);
?>