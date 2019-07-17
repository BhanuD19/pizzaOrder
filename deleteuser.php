<?php
			if (isset($_GET['id']))
			{
	
	
			include('config.php');
		
			$id=$_GET['id'];
			mysql_query("DELETE FROM marias_users WHERE id='$id'");
			header("location: allusers.php");
			exit();
			}
			?>
			
			
