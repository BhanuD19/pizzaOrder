<?php
session_start();

include('config.php');
$userid = $_POST['userid'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$number=$_POST['number'];
$house1=$_POST['house1'];
$street1=$_POST['street1'];
$city=$_POST['city'];


mysql_query("UPDATE marias_members SET firstname='$firstname', lastname='$lastname', email='$email', number='$number', house1='$house1', street1='$street1', city='$city' WHERE id='$userid'");
header("location: viewmembers.php");
mysql_close($con);
?> 