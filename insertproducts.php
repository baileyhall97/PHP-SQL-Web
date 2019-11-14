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

$sql = "INSERT INTO `Products` (`Price`, `Type`, `Description`, `Additional`, `Extra`)
VALUES
('100', '1M VGA Cable', 'Generic VGA Cable', '1M', ''),
('200', '2M USB Extension Cable', 'Generic USB Extension Cable', '2M', ''),
('300', 'ATX', 'Generic Case - Blue	 Generic Case in Blue Colour', 'Blue', ''),
('250', 'ATX', 'Generic Case - White	 Generic Case in White Colour', 'White', ''),
('220', 'ATX', 'Generic Case - Black	 Generic Case in Black Colour', 'Black', ''),
('210', 'Antec ATX Case in Black', 'Antec Eleven Case', 'ATX', 'Black'),
('300', 'AMDs base model CPU', 'AMD E233 CPU', '2.5GHz', '2MB Cache'),
('350', 'AMDs top line model CPU', 'AMD F654 CPU', '3GHz', '3MB Cache'),
('370', 'Intels base model CPU', 'Intel 23E3 CPU', '2.5GHz', '2MB Cache'),
('380', 'Intels top line model CPU', 'Intel 87GG CPU', '3GHz', '3MB Cache'),
('220', 'ATIs mid-range model GPU', 'ATI G35 GPU', '700MHz', '2GB'),
('220', 'ATIs top line model GPU', 'ATI G55 GPU', '1058MHz', '2GB'),
('220', 'Nvidias mid-range model GPU', 'Nvidia 56T GPU', '700MHz', '2GB'),
('400', '4K 22\" monitor', 'Monitor', '', ''),
('600', 'Intel i7 CPU', 'CPU', '', ''),
('500', 'AMD 6600k', 'CPU', '', ''),
('320', '11\" Tablet', 'Android Tablet', '', ''),
('35', 'KVM Switch', 'Switch', '', ''),
('415', 'PC Gaming Chair', 'Furniture', '', ''),
('45', 'Office Monitor Desk', 'Furniture', '', '');
";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>