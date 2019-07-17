<?php
session_start();

include('config.php');
$userid = $_POST['userid'];
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$product_size_name=$_POST['product_size_name'];
$status=$_POST['status'];
$product_ingredients=$_POST['product_ingredients'];

mysql_query("UPDATE marias_products SET product_id='$product_id', product_name='$product_name', product_price='$product_price', product_size_name='$product_size_name' , status='$status', product_ingredients='$product_ingredients' WHERE id='$userid'");
header("location: viewproducts.php");
mysql_close($con);
?> 