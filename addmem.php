<?php
session_start();
$errmsg_arr = array();
$errflag = false;
include('config.php');
	

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$pword=$_POST['pword'];
$number=$_POST['number'];
$house=$_POST['house'];
$street=$_POST['street'];
$city=$_POST['city'];

$min_length = 6;  
    // you can set minimum length of the query if you want  
 if(strlen($pword) >= $min_length){

mysql_query("INSERT INTO marias_members (firstname, lastname, email, number, house1, street1, city, password) VALUES ('$firstname', '$lastname', '$email', '$number', '$house', '$street', '$city', '$pword')");
header("location: loginindex.php");
}
else
{
$errmsg_arr[] = 'password must contain not less than 6 characters';
$errflag = true;
}


if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: new.php");
		exit();
}




mysql_close($con);
?> 