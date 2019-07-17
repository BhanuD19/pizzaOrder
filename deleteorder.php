<?php
			if (isset($_GET['id']))
			{
	
	
			include('config.php');
		
			$id=$_GET['id'];
			mysql_query("DELETE FROM orderdetails WHERE orderid='$id'");
			header("location: order.php");
			exit();
			}
			?>
			
			
