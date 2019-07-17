<?php
	//Start session
	session_start();
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Roman's pizza</title>
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

var a=document.forms["abc"]["firstname"].value;
var b=document.forms["abc"]["lastname"].value;
var d=document.forms["abc"]["email"].value;
var e=document.forms["abc"]["pword"].value;
var f=document.forms["abc"]["ambot"].value;
var g=document.forms["abc"]["number"].value;
var h=document.forms["abc"]["house"].value;
var i=document.forms["abc"]["street"].value;
var j=document.forms["abc"]["city"].value;
if ((a==null || a==""))
  {
  alert("you must enter your username");
  return false;
  }
if ((b==null || b==""))
  {
  alert("you must enter your password");
  return false;
  }
if ((d==null || d==""))
  {
  alert("you must enter your email address");
  return false;
  }
if ((e==null || e==""))
  {
  alert("you must enter your password");
  return false;
}
if ((f==null || f==""))
  {
  alert("Retype password");
  return false;
  }
if ((g==null || g==""))
  {
  alert("you must enter your contact number");
  return false;
}
if ((h==null || h==""))
  {
  alert("you must enter your house location");
  return false;
}
if ((i==null || i==""))
  {
  alert("you must enter your Street");
  return false;
}
if ((j==null || j==""))
  {
  alert("you must enter your City");
  return false;
}
if( e != f ) {
alert("Password does not match");
  return false;
}
var atpos=d.indexOf("@");
var dotpos=d.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=d.length)
  {
  alert("Not a valid e-mail address");
  return false;
  } 

}
</script>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    
    //called when key is pressed in textbox
	$("#contact").keypress(function (e)  
	{ 
	  //if the letter is not digit then display error and don't type anything
	  if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
	  {
		//display error message
		$("#errmsg").html("Number Only").show().fadeOut("slow"); 
	    return false;
      }	
	});
	

  });
  </script>

</script>

<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
.style2 {color: #FF0000}
-->
</style>
</head>

<body>
<div style="width:400px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">
  <form id="form1" name="abc" method="post" action="addmem.php" onsubmit="return validateForm()">
 <div style="background-color:#ff3300; font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px; width:390px;"> 
 
 
 <div style="float:left;"><strong>Members Registration</strong></div>
 <div style="float:right; margin-right:3px; background-color:#cccccc; width:25px; text-align:center; height:22px;"><a href="loginindex.php">X</a></div>
 
 
 </div>
  <table width="368" align="center">
  <tr>
    <td colspan="2"><div style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">All Field Mark with asterisk (<span class="style1"><b>*</b></span>) must be filled up</div></td>
  </tr>
  <tr>
    <td colspan="2"><div style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:12px;"><?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?></div></td>
  </tr>
	  <tr>
  <td width="120" valign="top"><div align="right">Firstname:</div></td>
        <td width="236"><input type="text" name="firstname">
              <span class="style2">*</span></td>
      </tr>
              <tr>
                <td valign="top"><div align="right">Lastname:</div></td>
                <td><input type="text" name="lastname">
                  <span class="style2">*</span></td>
              </tr>
			 
              <tr>
                <td valign="top"><div align="right">Email:</div></td>
                <td><input type="text" name="email">
                  <span class="style2">*</span></td>
              </tr>
			  <tr>
                <td valign="top"><div align="right">Password:</div></td>
                <td><input type="password" name="pword">
                  <span class="style2">*</span></td>
              </tr>
              <tr>
                <td valign="top"><div align="right">Retype Password:</div></td>
                <td><input type="password" name="ambot">
                  <span class="style2">*</span></td>
              </tr>
              <tr>
                <td valign="top"><div align="right">Contact Number:</div></td>
                <td><input name="number" type="text" id="contact" size="18">
                      <span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FF0000; font-weight:bold;" id="errmsg"></span><span class="style2">*</span></td>
        </tr>
              <tr>
                <td valign="top"><div align="right">House number:</div></td>
                <td><input type="text" name="house">
                  <span class="style2">*</span></td>
              </tr>
		
		<tr>
                <td valign="top"><div align="right">Street No:</div></td>
          <td><input type="text" name="street">
            <span class="style2">*</span></td>
      </tr>
			  <tr>
                <td valign="top"><div align="right">City:</div></td>
                <td><input type="text" name="city">
                  <span class="style2">*</span></td>
              </tr>
 <tr>
                <td valign="top">&nbsp;</td>
                <td><input type="submit" value="save"></td>
      </tr>
</table>
    
  </form>
</div>
</body>
</html>		