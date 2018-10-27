<?php
$mysqli$con = mysqli_connect("localhost","root","","atul");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
