<?php
$con=mysqli_connect("localhost","bhall","Password1","myDB");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"UPDATE Persons SET Age=35
WHERE FirstName='Sam' AND LastName='Rock'");

mysqli_close($con);
?>
