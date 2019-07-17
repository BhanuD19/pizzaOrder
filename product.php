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
</head>
<body>
<div id="tmo_container">
  <div id="tmo_header_section"> </div>
  <div id="tmo_menu_bg">
    <div id="tmo_menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
		<li><a href="contact.php">Contact Us</a></li>
        <li><a href="product.php"  class="current">Product</a></li>
        <li><a href="loginindex.php">Order Now! </a></li>
        <li><a href="franchise.php">Franchise</a></li>
      </ul>
    </div>
  </div>
  <div id="tmo_header_pizza"> </div>
  
  <div class="con">
    <div id="tmo_content_left1">
      <?php
			   include('config.php');
								
								

								
								$result2 = mysql_query("SELECT * FROM category");
								
								
								while($row2 = mysql_fetch_array($result2))
								  {
								  $ble=$row2['id'];
								  $result3 = mysql_query("SELECT * FROM marias_products where product_id='$ble'");
								
								
								$row3 = mysql_fetch_array($result3);
								  
								  
      echo '<div class="tmo_pizza_box"> <a rel="facebox" href=large.php?id=' . $row3["product_id"] . '><img alt="Pizza" src="images/pizza/'.$row3['product_photo'].'" width="65px" height="65px" /></a>';
          echo '<div class="textbox"> '.$row3['product_name'].' </div>';
      echo '</div>';
	 
								  }
										  
	?>
      
    </div>
  </div>
  
  <div>
</div>
</body>

</html>