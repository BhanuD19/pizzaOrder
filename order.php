<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Romania's pizza</title>



<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
 
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>

<script type="text/javascript">
function validateForm()
{


if (document.abcd.checkbox.checked == false)
{
alert ('pls. agree the term and condition of this company');
return false;
}
else
{
return true;
}
}
</script>


<script type="text/javascript">
    function ShowTime()
    {
      var time=new Date()
      var h=time.getHours()
      var m=time.getMinutes()
      var s=time.getSeconds()
      // add a zero in front of numbers<10
      m=checkTime(m)
      s=checkTime(s)
      document.getElementById('txt').value=h+" : "+m+" : "+s
      t=setTimeout('ShowTime()',1000)
	
    }
    function checkTime(i)
    {
      if (i<10)
      {
        i="0" + i
      }
      return i
    }
    </script>




<script type="text/javascript">
function showDiv(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
 
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		
 
		if(selectedOption == "1")
		{
			displayDiv(prefix,"1");
		}
		else if(selectedOption == "2")
		{
			displayDiv(prefix,"2");
		}
		
 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script>



</head>
<body onLoad="ShowTime()">
<div id="tmo_container">
  <div id="tmo_header_section"><div style="float:right; margin-right:30px;">
  <?php 
  include('config.php');
  $id=$_SESSION['SESS_MEMBER_ID'];
  
  $resulta = mysql_query("SELECT * FROM marias_members WHERE id = '$id'");

			while($row = mysql_fetch_array($resulta))
			{
			echo $row['firstname'] .' '. $row['lastname'];
			}
  
  ?>&nbsp;<a href="index.php">&nbsp;logout</a></div> 
  </div>
  <div id="tmo_menu_bg">
    <div id="tmo_menu">
      <ul>
	  <div style="float:left">
      <input name="time" type="text" id="txt" style="border: 0px none; font-size: 25px; margin-top: -5px; height: 23px; width: 130px; background-color:#000000; color:#FF0000; font-stretch:wider" readonly/> </div> 
      </ul>
	  
    </div>
  </div>
  <div id="tmo_header_pizza"> </div>
  <div id="tmo_content">
    <div id="tmo_content_left">
	  <div class="text">List Of Product </div>
     
	                  <div class="view1"><?php
			   include('config.php');
								
								

								
								$result2 = mysql_query("SELECT * FROM category");
								
								
								while($row2 = mysql_fetch_array($result2))
								  {
								  $ble=$row2['id'];
								  
								  
								  
								  $result3 = mysql_query("SELECT * FROM marias_products where product_id='$ble'");
								
								
								$row3 = mysql_fetch_array($result3);
								  
								  
      echo '<div class="tmo_pizza_box"> <a rel="facebox" href=portal.php?id=' . $row3["product_id"] . '><img alt="Pizza" src="images/pizza/'.$row3['product_photo'].'" width="65px" height="65px" /></a>';
          echo '<div class="textbox"> '.$row3['product_name'].' </div>';
      echo '</div>';
	 
								  }
										  
	?></div>
    </div>
	
	
	
	
    <div id="tmo_content_right">
	<form method="post" action="paymentportal.php" name="abcd" onsubmit="return validateForm()">
	<input name="cusid" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>" />
	<input name="transactioncode" type="hidden" value="<?php echo $_SESSION['SESS_FIRST_NAME']; ?>" />
      <h2>Order Details </h2>
      
	  
	  
	  
	  
	  
	  <table width="335" border="1" cellpadding="0" cellspacing="0" style="color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:10px;">
        <tr>
          <td width="90"><div align="center"><strong>Product Name </strong></div></td>
          <td width="84"><div align="center"><strong>Size</strong></div></td>
          <td width="27"><div align="center"><strong>Qty</strong></div></td>
          <td width="45"><div align="center"><strong>Price</strong></div></td>
          <td width="46"><div align="center"><strong>total</strong></div></td>
          <td width="29"><div align="center"><strong>del</strong></div></td>
        </tr>
		<?php
		include('config.php');
$memid = $_SESSION['SESS_FIRST_NAME'];


$resulta = mysql_query("SELECT * FROM orderdetails WHERE transactioncode = '$memid'");

			while($row = mysql_fetch_array($resulta))
			{
		
        echo '<tr>';
          echo '<td><div align="center">'.$row['pizzaname'].'</div></td>';
          echo '<td><div align="center">'.$row['pizasize'].'</div></td>';
          echo '<td><div align="center">'.$row['qty'].'</div></td>';
          echo '<td><div align="center">'.$row['price'].'</div></td>';
          echo '<td><div align="center">'.$row['total'].'</div></td>';
          echo '<td><div align="center">'.'<a href=deleteorder.php?id=' . $row["orderid"] . '>' . 'Cancel' . '</a>'.'</div></td>';
        echo '</tr>';
		}
		?>
        <tr>
          <td colspan="4"><div align="right">Grand Total: </div></td>
          <td colspan="2"><div align="left">
		  <?php
		  include('config.php');
$memid = $_SESSION['SESS_FIRST_NAME'];
		  $result = mysql_query("SELECT sum(total) FROM orderdetails WHERE transactioncode = '$memid'");

			while($rows = mysql_fetch_array($result))
			{ 
			echo '<input name="total" type="text" size="10" value="'.$rows['sum(total)'].'"/>'; 
		  }
		  ?>
		  
		  
		  </div></td>
        </tr>
      </table>
	  <br />
	  <table width="273" border="0" cellpadding="0" cellspacing="0" style="color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:10px;">
        <tr>
          <td width="76"><div align="right"><strong>Delivery Time:</strong></div></td>
          <td width="97"><select name="time">
            <option value="8:00am">8:00am</option>
            <option value="8:15am">8:15am</option>
            <option value="8:30am">8:30am</option>
            <option value="8:45am">8:45am</option>
            <option value="9:00am">9:00am</option>
            <option value="9:15am">9:15am</option>
            <option value="9:30am">9:30am</option>
            <option value="9:45am">9:45am</option>
            <option value="10:00am">10:00am</option>
            <option value="10:15am">10:15am</option>
            <option value="10:30am">10:30am</option>
            <option value="10:45am">10:45am</option>
            <option value="11:00am">11:00am</option>
            <option value="11:15am">11:15am</option>
            <option value="11:30am">11:30am</option>
            <option value="11:45am">11:45am</option>
            <option value="12:00pm">12:00pm</option>
            <option value="12:15pm">12:15pm</option>
            <option value="12:30pm">12:30pm</option>
            <option value="12:45pm">12:45pm</option>
            <option value="1:00pm">1:00pm</option>
            <option value="1:15pm">1:15pm</option>
            <option value="1:30pm">1:30pm</option>
            <option value="1:45pm">1:45pm</option>
            <option value="2:00pm">2:00pm</option>
            <option value="2:15pm">2:15pm</option>
            <option value="2:30pm">2:30pm</option>
            <option value="2:45pm">2:45pm</option>
            <option value="3:00pm">3:00pm</option>
            <option value="3:15pm">3:15pm</option>
            <option value="3:30pm">3:30pm</option>
            <option value="3:45pm">3:45pm</option>
            <option value="4:00pm">4:00pm</option>
            <option value="4:15pm">4:15pm</option>
            <option value="4:30pm">4:30pm</option>
            <option value="4:45pm">4:45pm</option>
            <option value="5:00pm">5:00pm</option>
            <option value="5:15pm">5:15pm</option>
            <option value="5:30pm">5:30pm</option>
            <option value="5:45pm">5:45pm</option>
            <option value="6:00pm">6:00pm</option>
            <option value="6:15pm">6:15pm</option>
            <option value="6:30pm">6:30pm</option>
            <option value="6:45pm">6:45pm</option>
            <option value="7:00pm">7:00pm</option>
            <option value="7:15pm">7:15pm</option>
            <option value="7:30pm">7:30pm</option>
            <option value="7:45pm">7:45pm</option>
            <option value="8:00pm">8:00pm</option>
            <option value="8:15pm">8:15pm</option>
            <option value="8:30pm">8:30pm</option>
            <option value="8:45pm">8:45pm</option>
            <option value="9:00pm">9:00pm</option>
            <option value="9:15pm">9:15pm</option>
            <option value="9:30pm">9:30pm</option>
            <option value="9:45pm">9:45pm</option>
            <option value="10:00pm">10:00pm</option>
            <option value="10:15pm">10:15pm</option>
            <option value="10:30pm">10:30pm</option>
            <option value="10:45pm">10:45pm</option>
            <option value="11:00pm">11:00pm</option>
            <option value="11:15pm">11:15pm</option>
            <option value="11:30pm">11:30pm</option>
            <option value="11:45pm">11:45pm</option>
            <option value="12:00am">12:00am</option>
          </select></td>
        </tr>
        <tr>
          <td><div align="right"><strong>Select One:</strong></div></td>
          <td><select name="portal" id="cboOptions" onChange="showDiv('div',this)">
	
	<option value="1">Delivery</option>
	<option value="2">Pick-Up</option>
	</select>
            
          </select></td>
        </tr>
        
		<div id="div1" style="display:none; color:#000000">
		
            &nbsp;Delivery Destination:<input name="dist" type="text" />
          
		  </div>
		<div id="div2" style="display:none; color:#000000">
		
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recepient:<input name="person" type="text" />
         
		  </div>  
		  
		  
        <tr>
          <td><div align="right"><strong>Distination:</strong></div></td>
          <td><select name="distination" id="distination">
            <option value="City Proper">City Proper</option>
            <option value="Outside City">Outside City</option>
          </select></td>
        </tr>
		
		<tr>
          <td colspan="2"><label>
            <input type="checkbox" name="checkbox" value="checkbox" />
            I Agree The <a rel="facebox" href="terms.php">Terms and Condition</a> of this company</label></td>
          </tr>
		
      </table><br />
	  <input name="" type="submit" value="Confirm Order" />
	  </form>
    </div>

	
	
	
	
	
	
	
	
	
	
    <div id="tmo_card"></div>
  </div>
  <div id="tmo_container_end"></div>
</div>
<div id="tmo_footer">
  <div class="middle">
        Copyright © mamma marias pizzeria</div>
        <div class="button"></div>
</div>
<div>
</div>
</body>

</html>