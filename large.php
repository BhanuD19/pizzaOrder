<div style="color:#000000;">
<?php

				  if (isset($_GET['id']))
			{
	
	
			include('config.php');
		
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM marias_products WHERE product_id = $id");

			$row3 = mysql_fetch_array($result);
			echo '<div style="font-size:24px;"><b>'.$row3['product_name'].'</b></div><br>';
			echo '<b>Ingredients</b>'.'<div style="font-size:12px;">'.$row3['product_ingredients'].'</div><br>';
				echo '<img alt="Pizza" src="images/pizza/'.$row3['product_photo'].'" width="250" height="250"  />';
  			
	
			}
			?>
<table width="191" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center">Size</div></td>
    <td><div align="center">Price</div></td>
  </tr>
 
			<?php

				  if (isset($_GET['id']))
			{
	
	
			include('config.php');
		
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM marias_products WHERE product_id = $id");

			while($row3 = mysql_fetch_array($result))
  			{
			echo '<tr>';
				echo '<td><div align="center">'.$row3['product_size_name'].'</div></td>';
				echo '<td><div align="center">'.$row3['product_price'].'</div></td>';
			echo '</tr>';
  			}
	
			}
			?>
			 
</table>
			</div>