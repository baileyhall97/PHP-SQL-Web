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

$sql = "INSERT INTO Customers (`Customerid`, `GivenName`, `SurName`, `Address`, `City`, `State`)
VALUES ('50125
', 'Kevin
', 'Sullivan
', '27 W G St #3
','Geelong
','VIC
'),
('50168
', 'Pria
', 'Patel
', '3394 N 6th St #3
','Melbourne
','VIC
'),
('50173
', 'Will
', 'Leung
', '6 Vincente Ave
','Werribee
','VIC
'),
('50178
', 'Angel
', 'Gonzales
', '658 Benito St
','Werribee
','VIC'),
('50187
', 'Mike
', 'Lee
', '13756 Redwood Ave
','Geelong
','VIC
'),
('50193
', 'Phan
', 'Khai
', '67 N Ukiah Way
','Torquay
',''),
('50197
', 'Angel
', 'Lopez
', '98 Sheridan St
','Drysdale
','VIC
'),
('50198
', 'Luis
', 'Alvarez
', '34 Kumquat Place
','Newtown
','VIC
'),
('50201
', 'Nguyen
', 'Cuong
', '79 Coalinga Ave
','Norlane
','VIC
'),
('50211', 'Sara
', 'Jackson
', '5 Alamitos St
','Corio
','VIC
'),
('50219
', 'Daniel
', 'Saadi
', '32 W Rosewood Ct
','Geelong
','VIC
'),
('50230
', 'Ed
', 'Baig
', '5687 E Walnut Ave
','Melbourne
','VIC
'),
('50231
', 'Tony
', 'Guerrero
', '12 N Jasmine Ave
','Werribee
','VIC
'),
('50233
', 'Anna
', 'Lim
', '18 Winn Dr
','Werribee
','VIC
'),
('50234
', 'Cathy
', 'Ng 
', '9088 Holt Blvd Apt #243
','Geelong
','VIC
'),
('50244
', 'Cathy
', 'Lam
', '4803 Granada Ct
','Torquay
','VIC
'),
('50257
', 'Juan
', 'Hernandez
', '4255 San Vincente St
','Drysdale
','VIC
'),
('50266
', 'Sofia
', 'Garcia
', '13 E La Deney Ct
','Newtown
','VIC'),
('50273
', 'Jennifer
', 'Kidd
', '2321 San Berardino St
','Norlane
','VIC
'),
('50295
', 'Raj
', 'Malik
', '25A W Princeton St
','Corio
','VIC
'),
('50323
', 'Charlie
', 'Bahn
', '18 Chaffee St
','Corio
','VIC
'),
('50345
', 'Angela
', 'Smith
', '112 E 4th St
','Corio
','VIC'),
('50564
', 'Maria
', 'Agbayani
', '101 W E St
','Corio
','VIC')
";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>