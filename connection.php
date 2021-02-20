<?php
$con=mysqli_connect("localhost","root","","reg");
if(!$con)
{
  die("server connection failed".mysqli_connect_error());
}
else
  {
echo "connection successfully";
  }
?>
