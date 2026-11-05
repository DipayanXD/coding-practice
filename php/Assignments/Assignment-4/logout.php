<?php
session_start();
$_SESSION = []; // Clear session data
session_destroy(); // End session
setcookie('email', '', time() - 3600, '/'); // Remove cookie
header('Location: Q1.php'); exit;
