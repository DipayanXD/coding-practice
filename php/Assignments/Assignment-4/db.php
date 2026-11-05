<?php
// Shared connection for Task 2
$conn = mysqli_connect('localhost', 'root', '', 'lab4_db');
if (!$conn) die('Database connection failed.');
