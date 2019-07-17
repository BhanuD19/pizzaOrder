<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
<table width="249" border="1" cellpadding="0" cellspacing="0">
  <tr >
    <td width="189"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;Products</div></td>
    <td width="44">Qty</td>
  </tr>
  
<?php
	if (isset($_GET['id']))
	{		   
								include('config.php');
							
								$id=$_GET['id'];
								
								$result3 = mysql_query("SELECT * FROM orderdetails where transactioncode ='$id'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {  
  
  
  echo '<tr>';
    echo '<td><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;'.$row3['pizzaname'].'    '.$row3['pizasize'].'</div></td>';
    echo '<td>'.$row3['qty'].'</td>';
  echo '</tr>';


  }
  }
  ?>
</table><br>

<?php
	if (isset($_GET['id']))
	{		   
								include('config.php');
							
								$id=$_GET['id'];
								
								$result3 = mysql_query("SELECT * FROM orderdetails where transactioncode ='$id'");
								$row3 = mysql_fetch_array($result3);
								$asdfgh=$row3['customer'];
								$result4 = mysql_query("SELECT * FROM marias_members where id ='$asdfgh'");
								$row4 = mysql_fetch_array($result4);
								echo '<b>Address of the Person who Ordered:</b> <br>'.$row4['house1'].', '.$row4['street1'].', '.$row4['city'];
						
  }
  ?>




<br />
<?php
	if (isset($_GET['id']))
	{		 
								 include('config.php');
							
								$id=$_GET['id'];
								
								$result3 = mysql_query("SELECT * FROM distination where code ='$id'");
								
								
								$row3 = mysql_fetch_array($result3);
								$pol=$row3['agreement'];
								if($pol=='Delivery')
								{
								echo '<b>Remarks:</b>&nbsp;'.$row3['agreement'].'<br><b>Distination:</b>&nbsp;'.$row3['dist'].'<br><b>Delivery Time:</b> '.$row3['time'];
								}
								if($pol=='Pick-Up')
								{
								echo '<b>Remarks:</b>&nbsp;'.$row3['agreement'].'<br><b>Person to Pick Up:</b>&nbsp;'.$row3['person'].'<br><b>Pickup Time:</b> '.$row3['time'];
								}
  
  }
  ?>
