<?php
session_start();

include('config.php');
$username=$_POST['username'];
$password=$_POST['password'];

mysql_query("INSERT INTO marias_users (username, password) VALUES('$username', '$password')");
header("location: allusers.php");
mysql_close($con);
?> 