<?php
	//Start session
	session_start();
	
	//Connect to mysql server
	include('config.php');
	
	$errmsg_arragoy = array();
	
	//Validation error flag
	$errflaglets = false;
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$login = clean($_POST['user']);
	$password = clean($_POST['password']);
	
	//Create query
	$qry="SELECT * FROM marias_users WHERE username='$login' AND password='$password'";
	$result=mysql_query($qry);
	//while($row = mysql_fetch_array($result))
//  {
//  $level=$row['position'];
//  }
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			session_write_close();
			//if ($level="admin"){
			header("location: home_admin.php");
			exit();
			//}
			//else{
			//header("location: front.php");
			//exit();
			//}
		}else {
			//Login failed
			$errmsg_arragoy[] = 'Invalid Username add or password';
			$errflaglets = true;
			if($errflaglets) {
		$_SESSION['ERRMSG_ARROGOY'] = $errmsg_arragoy;
		session_write_close();
		header("location: admin_index.php");
		exit();
		}
		}
	}else {
		die("Query failed");
	}
?>