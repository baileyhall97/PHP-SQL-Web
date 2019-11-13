<?php
# https://www.php.net/manual/en/mysqli-stmt.prepare.php
$servername = "localhost";
$username = "bh";
$password = "Password1";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = "glenn";
$stmt = mysqli_stmt_init($conn);
if (mysqli_stmt_prepare($stmt, 'SELECT * FROM `Persons` WHERE firstname='Glenn')) {

    /* bind parameters for markers */
    mysqli_stmt_bind_param($stmt, "s", $name);      //https://www.php.net/manual/en/mysqli-stmt.bind-param.php
    
    /* execute query */
    mysqli_stmt_execute($stmt);

    /* bind result variables */
    mysqli_stmt_bind_result($stmt, $email);

    /* fetch value */
    mysqli_stmt_fetch($stmt);

    printf("%s's email is: %s\n", $name, $email);

    /* close statement */
    mysqli_stmt_close($stmt);
}

/* close connection */
mysqli_close($conn);
?>


