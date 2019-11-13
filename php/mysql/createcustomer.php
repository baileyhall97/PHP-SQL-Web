<?php
$servername = "localhost";
$username = "bhall";
$password = "Password1";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Customers (
Customerid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
GivenName VARCHAR(30) NOT NULL,
Surname VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Customers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>