<?php
$servername = "localhost";
$username = "bhall";
$password = "Password1";
$database = "myDB";

$con=mysqli_connect($servername,$username,$password,$database);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Persons WHERE firstname='Fred'");

while($row = mysqli_fetch_array($result)) {
  echo $row['firstname'] . " " . $row['lastname'];
  echo "<br>";
}
?>
