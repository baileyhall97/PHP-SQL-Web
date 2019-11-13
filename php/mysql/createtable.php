<?php
$servername ="localhost";
$username = "bhall";
$password = "Password1";
$dbname = "bailey";

$con=mysqli_connect("localhost","bhall","Password1", "bailey");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// Create table
$sql="CREATE TABLE Persons (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
