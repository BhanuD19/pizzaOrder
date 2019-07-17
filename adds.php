<?php
session_start();

include('config.php');
$userid = $_POST['userid'];
$qtyleft=$_POST['qtyleft'];
$qty=$_POST['qty'];
$sss=$qtyleft+$qty;

mysql_query("UPDATE inventory SET qtyleft='$sss' WHERE id='$userid'");
header("location: inventory.php");
mysql_close($con);
?> 