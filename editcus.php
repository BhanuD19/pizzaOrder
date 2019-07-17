  
<script type="text/javascript">
function validateForm()
{

var a=document.forms["abc"]["firstname"].value;
var b=document.forms["abc"]["lastname"].value;
var d=document.forms["abc"]["email"].value;
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

var atpos=d.indexOf("@");
var dotpos=d.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=d.length)
  {
  alert("Not a valid e-mail address");
  return false;
  } 

}
</script>

<?php
				  if (isset($_GET['id']))
	{
	
	echo '<form action="editcus-exec.php" method="post" name="abc" onsubmit="return validateForm()">';
	
	//echo "<img width=200 height=180 alt='Unable to View' src='" . $row1["image"] . "'>";
	
			include('config.php');
		
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM marias_members WHERE id = $id");

			while($row = mysql_fetch_array($result))
  			{
			
			
		echo '<input type="hidden" name="userid" value="'. $row['id'] .'">'; 	
			
			
			
			echo '<table width="360" border="0" cellpadding="0">';
              echo '<tr>';
                echo '<td width="87" valign="top"><div align="right">firstname:</div></td>';
                echo '<td width="281"><input type="text" name="firstname" value="'. $row['firstname'] .'"></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">lastname:</div></td>';
                echo '<td><input type="text" name="lastname" value="'. $row['lastname'] .'"></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">email:</div></td>';
                echo '<td><input type="text" name="email" value="'. $row['email'] .'"></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">number:</div></td>';
                echo '<td><input type="text" name="number" value="'. $row['number'] .'"></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">house1:</div></td>';
                echo '<td><input type="text" name="house1" value="'. $row['house1'] .'"></td>';
              echo '</tr>';
			  echo '<tr>';
                echo '<td valign="top"><div align="right">street1:</div></td>';
                echo '<td><input type="text" name="street1" value="'. $row['street1'] .'"></td>';
              echo '</tr>';
			  echo '<tr>';
                echo '<td valign="top"><div align="right">city:</div></td>';
                echo '<td><input type="text" name="city" value="'. $row['city'] .'"></td>';
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
			
			
