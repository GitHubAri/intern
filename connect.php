
<?php
$connection = mysqli_connect("localhost","root","","comment");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>