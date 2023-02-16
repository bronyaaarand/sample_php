<?php
$con = mysqli_connect("localhost","root","","demo");
if (mysqli_connect_errno())
  {
  echo "oh shit not gud " . mysqli_connect_error();
  }
?>