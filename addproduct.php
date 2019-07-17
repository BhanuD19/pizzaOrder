<form action="addproi-exec.php" method="post" name="abc">

			<table width="400" border="0" cellpadding="0">
              <tr>
                <td width="100" valign="top"><div align="right">Product ID:</div></td>
                <td width="300"><div align="left"><input name="roomid" type="text" id="roomid"></div></td>
              </tr>
              <tr>
                <td valign="top"><div align="right">Name:</div></td>
                <td><div align="left"><?php
	  include('config.php');
$name= mysql_query("select * from category");

echo '<select name="name">';
 while($res= mysql_fetch_assoc($name))
{
echo '<option value="'.$res['id'].'">';
echo $res['category'];
echo'</option>';
}
echo'</select>';

mysql_close($con)


?></div></td>
              </tr>
              <tr>
                <td valign="top"><div align="right">Price:</div></td>
                <td><div align="left"><input name="price" type="text" id="price"></div></td>
              </tr>
              <tr>
                <td valign="top"><div align="right">Size:</div></td>
                <td><div align="left"><input name="size" type="text" id="size"></div></td>
              </tr>
              <tr>
                <td valign="top"><div align="right">Status:</div></td>
                <td><div align="left"><select name="status" id="status">
    <option selected>available</option>
    <option>unavailable</option>
                </select></div></td>
              </tr>
              <tr>
                <td valign="top"><div align="right">Ingrdients:</div></td>
                <td><div align="left"><textarea name="ing" cols="40" rows="5" id="ing">
			    </textarea></div></td>
              </tr>
              <tr>
                <td valign="top"><div align="right"></div></td>
                <td><input name="Input" type="submit" value="Save" /></td>
              </tr>
            </table>
</form>