<?php
session_start();

include('config.php');
$textfield=$_POST['textfield'];
mysql_query("INSERT INTO category (category) VALUES('$textfield')");
header("location: viewproducts.php");
mysql_close($con);
?> 