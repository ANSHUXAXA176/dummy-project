<?php
$con=mysqli_connect("localhost","root","","reg");
$qry="SELECT * from user where sname='$sname' AND ano.='$ano.';
$conqry=mysqli_query($con,$qry);
if(mysqli_num_rows($conqry)>0)
{
while($result=mysqli_fetch_array($conqry))
{
$sname=$result['sname'];
$ano.=$result['ano.']
}
}
 ?>
 <form>
<table border="1" align="center">
  <tr>
    <td>sname</td>
    <td><input type="text" name="sname"></td>
  </tr>
  <tr>
    <td>ano.</td>
    <td><input type="text"name="ano."></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit"value="ok"name="submit"></td>
</table>
</tr>
</form>
