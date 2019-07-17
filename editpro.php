<!--para sa add data sa textbox -->
	<SCRIPT language="javascript">
<!--

function addCombo() {
	var textb = document.getElementById("txtCombo");
	var combo = document.getElementById("products");
	combo.value=combo.value +textb.value + ", ";
	textb.value = "";
}
//-->
</SCRIPT>
	<!--end--> 

<?php
				  if (isset($_GET['id']))
	{
	
	echo '<form action="editpro-execw.php" method="post" name="abc">';
	
	//echo "<img width=200 height=180 alt='Unable to View' src='" . $row1["image"] . "'>";
	
			include('config.php');
		
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM inventory WHERE id = $id");

			while($row = mysql_fetch_array($result))
  			{
			echo '<input type="hidden" name="userid" value="'. $row['id'] .'">'; 
  			echo 'Product Name: '.'<input type="text" name="qtyleft" value="'. $row['name'] .'">'; 
			   echo '<br>';
			   echo 'Qty Left: '.'<input type="text" name="qleft" value="'. $row['qtyleft'] .'">'; 
			   echo '<br>';
			   echo 'Qty Sold: '.'<input type="text" name="qsold" value="'. $row['qtysold'] .'">'; 
			   echo '<br>';
			echo 'Pizza Name: '.'<input type="text" name="products" id="products" value="'. $row['product_id'] .'">'; 
			?>   
			   
			<?php
include('config.php');
$name= mysql_query("select * from category");

echo '<select name="txtCombo"  id="txtCombo" class="textbox1">';
echo '<option selected="selected">Select</option>';
 while($res= mysql_fetch_assoc($name))
{

echo '<option value='.$res['id'].'>';
echo $res['category'];
echo'</option>';
}
echo'</select>';



?><input type="button" value="Add" onClick="addCombo()" style="cursor:pointer;">   
			   
	<br>		   
			<?php   
			echo '<input name="" type="submit" value="Save">';   
			
  			}
	echo '</form>';
			}
			?>