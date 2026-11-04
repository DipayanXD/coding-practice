<?php
// BCAC501 - PHP with MySQL | Semester V
// Lab Assignment - 3 | Task 9: Deleting a Record

require_once "db.php";

// 1. Cast id from GET parameter to integer
$id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;

if ($id <= 0) {
    die("Invalid student ID. <a href='Q7.php'>Back to Students Table (Q7.php)</a>");
}

// 2. Prepare DELETE statement identified by id
$stmt = mysqli_prepare($conn, "DELETE FROM students WHERE id = ?");

if ($stmt) {
    // 3. Bind the single id parameter with type "i" (integer)
    mysqli_stmt_bind_param($stmt, "i", $id);

    // 4. Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);

        // 5. Redirect back to listing page (Q7.php) with deleted id
        header("Location: Q7.php?deleted=" . $id);
        exit();
    } else {
        echo "Error deleting record: " . mysqli_stmt_error($stmt);
        mysqli_stmt_close($stmt);
    }
} else {
    echo "Error preparing delete statement: " . mysqli_error($conn);
}
?>

