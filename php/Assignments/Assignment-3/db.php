<?php
// Shared MySQLi database connection for Assignment 3
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lab3_db";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
