<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Roman's pizza</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style2 {font-weight: bold}
.style3 {font-weight: bold}
.style4 {font-size: 16px}
-->
</style>
</head>

<body>
<?php


include('config.php');
$cusid=$_POST['cusid'];
$grandtotal=$_POST['grandtotal'];
$transactioncode=$_POST['transactioncode'];
$trasactiondate=date("m/d/Y");
$status='Completed';
$mode='Cash';


mysql_query("INSERT INTO marias_orders (cusid, amountpaid, status, transactiondate, transactioncode, mode) VALUES('$cusid', '$grandtotal', '$status', '$trasactiondate', '$transactioncode', '$mode')");
?> 
<div style="margin:0 auto; width:400px; height:auto; font-family:Arial, Helvetica, sans-serif; font-size:10px; text-align:right;"><a href="index.php">Logout</a></div>
<div style="margin:0 auto; width:400px; height:auto; font-family:Arial, Helvetica, sans-serif; font-size:10px;">
<div align="center"><img src="images/REPORTLOGO.jpg" /></div><br /><br />
<div align="center" class="style1 style4">ORDER CONFIRMATION</div>
<br /><br />
<div align="right">Date<strong>:<?php echo date("m/d/Y");?></strong></div>
<br /><br />
<div align="left"><strong>Transaction Code:<?php echo $_POST['transactioncode'];?></strong></div>
<br />
<?php
include('config.php');
$memid=$_POST['cusid'];
$result = mysql_query("SELECT * FROM marias_members where id = '$memid'");
$row1 = mysql_fetch_array($result);
echo '<div align="left">Customer Name:<strong>'.$row1['firstname'].' '.$row1['lastname'].'</strong></div><br />';
echo '<div align="left">Address:<strong>'.$row1['house1'].', '.$row1['street1'].', '.$row1['city'].'</strong></div><br />';

?>
Items:<br />
<span class="style2">
<?php
include('config.php');
$transactioncode=$_POST['transactioncode'];
$result = mysql_query("SELECT * FROM orderdetails where transactioncode = '$transactioncode'");
while($row1 = mysql_fetch_array($result))
{
echo $row1['pizzaname'].' '.$row1['pizasize'].'&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;&nbsp;&nbsp;'.$row1['qty'].'<br>';
}
?>
</span><br />
Total Payable: R
<span class="style3">
<?php
include('config.php');
$transactioncode=$_POST['transactioncode'];
$result = mysql_query("SELECT sum(total) FROM orderdetails where transactioncode = '$transactioncode'");
while($row1 = mysql_fetch_array($result))
{
echo $row1['sum(total)'];
}
?>
</span><br />
<br /><br />
<div align="center">
THIS IS SERVE AS YOUR OFFICIAL RECEIPT<BR />THANK YOU FOR CHOOSING Roman's pizza<BR />OPTIONAL FOR PRINTING<br>NOTE: Expect a phone call confirmation before the delivery
</div>
</div>
</body>
</html>