<?php
// Shared database connection (no output, so redirects work).
$conn = mysqli_connect('localhost', 'root', '', 'lab3_db');
if (!$conn) die('Connection failed: ' . mysqli_connect_error());
?>
