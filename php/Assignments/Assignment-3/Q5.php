<?php
// BCAC501 - PHP with MySQL | Semester V
// Lab Assignment - 3 | Task 5: Connecting to the Database

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lab3_db";

// 1. Establish database connection using mysqli_connect
$conn = mysqli_connect($host, $user, $pass, $dbname);

// 2. Check if the connection failed
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 3. Output confirmation message on success
echo "Connected successfully to " . $dbname;

// 4. Close connection
mysqli_close($conn);
?>

