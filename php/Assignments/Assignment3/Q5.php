<?php
// Connect to the lab database.
$conn = mysqli_connect('localhost', 'root', '', 'lab3_db');
if (!$conn) die('Connection failed: ' . mysqli_connect_error());
echo 'Connected successfully to lab3_db';
?>
