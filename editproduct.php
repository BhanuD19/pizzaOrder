<!--para sa add data sa textbox -->
	<SCRIPT language="javascript">
<!--

function addCombo() {
	var textb = document.getElementById("txtCombo");
	var combo = document.getElementById("combo");
	combo.value=combo.value +textb.value + ", ";
	textb.value = "";
}
//-->
</SCRIPT>
	<!--end--> 



<?php
				  if (isset($_GET['id']))
	{
	
	echo '<form action="editpro-exec.php" method="post" name="abc">';
	
	//echo "<img width=200 height=180 alt='Unable to View' src='" . $row1["image"] . "'>";
	
			include('config.php');
		
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM marias_products WHERE id = $id");

			while($row = mysql_fetch_array($result))
  			{
			
			
		echo '<input type="hidden" name="userid" value="'. $row['id'] .'">'; 	
			
			
			
			echo '<table width="360" border="0" cellpadding="0">';
              echo '<tr>';
                echo '<td width="87" valign="top"><div align="right">Room ID:</div></td>';
                echo '<td width="281"><div align="left"><input type="text" name="product_id" value="'. $row['product_id'] .'"></div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Name:</div></td>';
                echo '<td><div align="left"><input type="text" name="product_name" value="'. $row['product_name'] .'"></div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Price:</div></td>';
                echo '<td><div align="left"><input type="text" name="product_price" value="'. $row['product_price'] .'"></div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Size:</div></td>';
                echo '<td><div align="left"><input type="text" name="product_size_name" value="'. $row['product_size_name'] .'"></div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Status:</div></td>';
                echo '<td><div align="left"><select name="status" id="status">';
    echo '<option selected>available</option>';
    echo '<option>unavailable</option>';
                echo '</select><div</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Ingrdients:</div></td>';
                echo '<td><div align="left"><input name="product_ingredients" type="text" id="combo" size="70" class="textbox1" value="'. $row['product_ingredients'] .'">';
				?>
				
				<?php
include('config.php');
$name= mysql_query("select * from inventory");

echo '<select name="txtCombo"  id="txtCombo" class="textbox1">';
echo '<option selected="selected">Select</option>';
 while($res= mysql_fetch_assoc($name))
{

echo '<option>';
echo $res['name'];
echo'</option>';
}
echo'</select>';



?><input type="button" value="Add" onClick="addCombo()" style="cursor:pointer;">
				
				
				<?php
				echo '</div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right"></div></td>';
                echo '<td><input name="Input" type="submit" value="Save" /></td>';
              echo '</tr>';
            echo '</table>';
			
  			}
	echo '</form>';
			}
			?>
			
			
