<?php
session_start();

include('config.php');
$userid = $_POST['userid'];
$qtyleft=$_POST['qtyleft'];
$products=$_POST['products'];
$qleft=$_POST['qleft'];
$qsold=$_POST['qsold'];

mysql_query("UPDATE inventory SET name='$qtyleft', product_id='$products', qtyleft='$qleft', qtysold='$qsold' WHERE id='$userid'");
header("location: inventory.php");
mysql_close($con);
?> 