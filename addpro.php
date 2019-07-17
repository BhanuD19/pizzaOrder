<script type="text/javascript">
function validateForm()
{

var y=document.forms["abc"]["username"].value;
var a=document.forms["abc"]["password"].value;
if ((y==null || y==""))
  {
  alert("you must enter your username");
  return false;
  }
  if ((a==null || a==""))
  {
  alert("you must enter your password");
  return false;
  }
 

}
</script>
<?php
				  if (isset($_GET['id']))
	{
	
	echo '<form action="adds.php" method="post" name="abc">';
	
	//echo "<img width=200 height=180 alt='Unable to View' src='" . $row1["image"] . "'>";
	
			include('config.php');
		
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM inventory WHERE id = $id");

			while($row = mysql_fetch_array($result))
  			{
			echo '<input type="hidden" name="userid" value="'. $row['id'] .'">'; 
  			echo 'Quantity: '.'<input type="hidden" name="qtyleft" value="'. $row['qtyleft'] .'">'; 
			   echo '<br>';
			  echo '<input type="text" name="qty">';
  			}
	echo '</form>';
			}
			?>
			
			
