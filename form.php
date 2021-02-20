<?php
mysqli_connect("localhost","root","","reg");
if(isset($_REQUEST["submit"]))
{
  $studentname=$_REQUEST["sname"];
  $applicationno.=$_REQUEST["ano."];
$query=mysqli_query("SELECT * FROM user WHERE  studentname='$sname' && applicationno.='$ano.');
$rowcount=mysqli_num_rows($query);
if($rowcount==true)
{
  echo"studentname and applicationno. exist";
}
else{
echo " studentame and applicationno. doest exist";
}
}
 ?>
 <form>
<table border="1" align="center">
  <tr>
    <td>student name</td>
    <td><input type="text" name="sname"></td>
  </tr>
  <tr>
    <td>application no.</td>
    <td><input type="text"name="ano."></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit"value="login"name="submit"></td>
</table>
</tr>
</form>
