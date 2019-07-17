<?php
session_start();

include('config.php');
$roomid=$_POST['roomid'];
$name=$_POST['name'];
$price=$_POST['price'];
$size=$_POST['size'];
$status=$_POST['status'];
$ing=$_POST['ing'];

mysql_query("INSERT INTO marias_products (product_id, product_name, product_price, product_size_namem, status, product_ingredients) VALUES('$roomid', '$name', '$price', '$size', '$status', '$ing')");
header("location: viewproduct.php");
mysql_close($con);
?> 