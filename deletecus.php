<?php
			if (isset($_GET['id']))
			{
	
	
			include('config.php');
		
			$id=$_GET['id'];
			mysql_query("DELETE FROM marias_members WHERE id='$id'");
			header("location: viewmembers.php");
			exit();
			}
			?>
			
			
