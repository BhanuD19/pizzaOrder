<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Romania's pizza</title>
<link href="css/ble.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<!--sa poip up-->
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

  <!--sa validate from-->
<script type="text/javascript">
function validateForm()
{

var y=document.forms["login"]["user"].value;
var a=document.forms["login"]["password"].value;
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
<link rel="stylesheet" href="./febe/style.css" type="text/css" media="screen" charset="utf-8">
    
    <script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
    <script src="./js/application.js" type="text/javascript" charset="utf-8"></script>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style></head>

<body>
<div style="width:600px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">
<div style="background-color:#ff3300; height:40px; margin-bottom:10px;">
<div style="float:right; width:50px; margin-right:20px; background-color:cccccc; text-align:center;"><a href="home_admin.php">back</a></div>
<div style="float:left; margin-left:10px; margin-top:10px;"><strong>Welcome</strong> <?php echo $_SESSION['SESS_FIRST_NAME'];?></div>
</div>


 <br /><label style="margin-left:12px;">Filter</label> <input type="text" name="filter" value="" id="filter" /> 
 
  <a rel="facebox" href="adding.php">add ingredient </a> <br />
   <br />
  <table cellpadding="0" cellspacing="0" border="1" id="resultTable">
          <thead>
            <tr bgcolor="#cccccc" style="margin-bottom:10px;">
              		<th height="14">Name</th>
					<th>Quantity Left </th>
					<th>Quantity Sold </th>
					<th>Product Use</th>
					<th>Action</th>
            </tr>
          </thead>
          <tbody>
         <?php
			   include('config.php');
								
								

								
								$result3 = mysql_query("SELECT * FROM inventory");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {
								 echo '<tr>';
									echo '<td>'.$row3['name'].'</td>';
									echo '<td>'.$row3['qtyleft'].'</td>';
									echo '<td>'.$row3['qtysold'].'</td>';
									echo '<td>'.$row3['product_id'].'</td>';
									echo '<td>';
									echo'<a rel="facebox" href=addpro.php?id=' . $row3["id"] . '>' . 'Add' . '</a>';
									echo ' | ';
									echo'<a rel="facebox" href=editpro.php?id=' . $row3["id"] . '>' . 'Edit' . '</a>';
									echo '</td>';
								 echo '</tr>';
							
								  }
			  
			  ?>
          </tbody>
  </table>
</div>
</body>
</html>
