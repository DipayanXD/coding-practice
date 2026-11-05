<?php
require 'db.php';
$id = (int)($_POST['id'] ?? 0);
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $id > 0) {
    // Delete only the requested ID with a prepared statement.
    $stmt = mysqli_prepare($conn, 'DELETE FROM students WHERE id=?');
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
}
header('Location: Q7.php');
exit;
?>
