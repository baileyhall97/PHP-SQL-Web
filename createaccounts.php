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
$sql = "CREATE TABLE Accounts (
AccountID VARCHAR(30) NOT NULL,
CustomerID VARCHAR(30) NOT NULL,
ProductID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
TotalCost VARCHAR(30) NOT NULL,
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Accounts created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>