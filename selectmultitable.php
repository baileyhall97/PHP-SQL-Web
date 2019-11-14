<?php
$con=mysqli_connect("localhost","bhall","Password1","myDB");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Customers");

echo "<table border='1'>
<tr>
<th>Customerid</th>
<th>Givenname</th>
<th>Surname</th>
<th>reg_date</th>
<th>Address</th>
<th>City</th>
<th>State</th>
</tr>";


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['Customerid'] . "</td>";
        echo "<td>" . $row['Givenname'] . "</td>";
        echo "<td>" . $row['Surname'] . "</td>";
        echo "<td>" . $row['reg_date'] . "</td>";
        echo "<td>" . $row['Address'] . "</td>";
        echo "<td>" . $row['City'] . "</td>";
        echo "<td>" . $row['State'] . "</td>";
        echo "</tr>";

    }
} else {
    echo "0 results";
}

echo "</table>";

$result = mysqli_query($con,"SELECT * FROM Products");

echo "<table border='1'>
<tr>
<th>ProductID</th>
<th>Price</th>
<th>Description</th>
<th>Type</th>
<th>Additional</th>
<th>Extra</th>
</tr>";


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['Productid'] . "</td>";
        echo "<td>" . $row['Price'] . "</td>";
        echo "<td>" . $row['Description'] . "</td>";
        echo "<td>" . $row['Type'] . "</td>";
        echo "<td>" . $row['Additional'] . "</td>";
        echo "<td>" . $row['Extra'] . "</td>";
        echo "</tr>";

    }
} else {
    echo "0 results";
}

echo "</table>";

$result = mysqli_query($con,"SELECT * FROM Accounts");

echo "<table border='1'>
<tr>
<th>CustomerID</th>
<th>TotalCost</th>
<th>ProductID</th>
<th>AccountID</th>
</tr>";


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['CustomerID'] . "</td>";
        echo "<td>" . $row['TotalCost'] . "</td>";
        echo "<td>" . $row['ProductID'] . "</td>";
        echo "<td>" . $row['AccountID'] . "</td>";
        echo "</tr>";

    }
} else {
    echo "0 results";
}

echo "</table>";

mysqli_close($con);
?>


