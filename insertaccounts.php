<?php
$servername = "localhost";
$username = "bhall";
$password = "Password1";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `Accounts` (`TotalCost`, `ProductID`, `AccountID`) 
VALUES
('300', '7', 40173),
('220', 11, 40187),
('200', 2, 40230),
('350', 8, 40219),
('370', 13, 40244),
('220', 5, 40257),
('100', 1, 40295),
('210', 6, 40564),
('250', 4, 40354),
('370', 9, 40233),
('300', 7, 40323),
('220', 11, 40211),
('220', 12, 40201),
('320', 17, 50345),
('45', 20, 50230),
('380', 10, 50201),
('300', 7, 50564);
('370', 9, 50125),
('500', 16, 50187),
('300', 3, 50211)
";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>