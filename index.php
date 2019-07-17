<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
?>
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
        <li><a href="index.html"  class="current">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
		<li><a href="contact.php">Location</a></li>
        <li><a href="product.php">Product</a></li>
        <li><a href="loginindex.php">Order Now! </a></li>
        <li><a href="franchise.php">Franchise</a></li>
      </ul>
    </div>
  </div>
  <div id="tmo_header_pizza"> </div>
  <div id="tmo_content">
    <div id="tmo_content_left"><img src="images/main1.jpg" width="729" height="312" style="margin-left:-10px;" /></div>
    <div id="tmo_card"></div>
  </div>
  <div id="tmo_container_end"> </div>
</div>
<div id="tmo_footer">
    	<div class="top"></div>
        <div class="middle">
        Copyright © Romania's pizza</div>
        <div class="button"></div>
</div>
<div>
</div>
</body>

</html>