<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>

<?php
include('config.php');
$portal=$_POST['portal'];
$time=$_POST['time'];
if($portal=='2'){
$df='Pick-Up';
}
if($portal=='1'){
$df='Delivery';
}
$transactioncode=$_POST['transactioncode'];
$dist=$_POST['dist'];
$person=$_POST['person'];
mysql_query("INSERT INTO distination(code, dist, agreement, person, time) VALUES('$transactioncode', '$dist', '$df', '$person', '$time')");

?>
<div style="width:250px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">
 <div style="background-color:#0000FF; font-family:Arial, Helvetica, sans-serif; color:#FFFFFF; padding:5px; height:22px; width:250px;"> 
 
 
 <div style="float:left;">Mode Of Payment Form</div>
 
 
 
 </div>

<form method="post" action="cashconfirm.php">
<?php
$cusid=$_POST['cusid'];
$total=$_POST['total'];
$time=$_POST['time'];
$portal=$_POST['portal'];
$distination=$_POST['distination'];
$transactioncode=$_POST['transactioncode'];
$dist=$_POST['dist'];
if($portal=='2'){
$charge=0;
}
if($portal=='1'){
$charge=50;
}
if($distination=='City Proper'){
$charge1=0;
}
if($distination=='Outside City'){
$charge1=50;
}
$totalcharge=$charge+$charge1;
$grandtotal=$totalcharge+$total;
?>
<input name="transactioncode" type="hidden" value="<?php echo $transactioncode;?>" />
<input name="cusid" type="hidden" value="<?php echo $cusid;?>" />
<input name="total" type="hidden" value="<?php echo $total;?>" />
<input name="grandtotal" type="hidden" value="<?php echo $grandtotal;?>" />
<input name="totalcharge" type="hidden" value="<?php echo $totalcharge;?>" />
<input name="portal" type="hidden" value="<?php echo $portal;?>" />
<input name="distination" type="hidden" value="<?php echo $distination;?>" /><br />
 <div style="margin:0 auto; width:40px;">
<input name="" type="submit" value="Cash" />
</div>
</form>









<form action="https://www.sandbox.paypal.com/cgi-bin/webscr"  method="post">
        <!-- the cmd parameter is set to _xclick for a Buy Now button -->
<?php
$cusid=$_POST['cusid'];
$total=$_POST['total'];
$time=$_POST['time'];
$portal=$_POST['portal'];
$distination=$_POST['distination'];
$transactioncode=$_POST['transactioncode'];

if($portal=='Pick-Up'){
$charge=0;
}
if($portal=='Delivery'){
$charge=50;
}
if($distination=='City Proper'){
$charge1=0;
}
if($distination=='Outside City'){
$charge1=50;
}
$totalcharge=$charge+$charge1;
$grandtotal=$totalcharge+$total;
?>
	 
	<input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="business" value="mamma__1330248786_biz@yahoo.com" />
        <input type="hidden" name="item_name" value="<?php echo $cusid; ?>" />
        <input type="hidden" name="item_number" value="<?php echo $transactioncode; ?>" />
        <input type="hidden" name="amount" value="<?php echo $grandtotal; ?>" />
        <input type="hidden" name="no_shipping" value="1" />
        <input type="hidden" name="no_note" value="1" />
        <input type="hidden" name="currency_code" value="PHP" />
        <input type="hidden" name="lc" value="GB" />
        <input type="hidden" name="bn" value="PP-BuyNowBF" /><br />
		<div style="margin:0 auto; width:50px;">
        <input type="image" src="http://ppcalc.com/buttons/x-click-but9_pay.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"  />
        <img alt="fdff" border="0" src="https://www.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1" />
		</div>
        <!-- Payment confirmed -->
        <input type="hidden" name="return" value="http://mammamarias.elementfx.com/showconfirm.php" />
        <!-- Payment cancelled -->
        <input type="hidden" name="cancel_return" value="http://mammamarias.elementfx.com/cancel.php" />
        <input type="hidden" name="rm" value="2" />
        <input type="hidden" name="notify_url" value="http://mammamarias.elementfx.com/ipn.php" />
        <input type="hidden" name="custom" value="any other custom field you want to pass" />
    </form>
	
	</div>
</body>
</html>
