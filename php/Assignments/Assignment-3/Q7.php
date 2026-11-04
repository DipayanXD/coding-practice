<?php
// BCAC501 - PHP with MySQL | Semester V
// Lab Assignment - 3 | Task 7: Displaying Records in a Table

require_once "db.php";

// Fetch all rows from students table
$query = "SELECT * FROM students ORDER BY id ASC";
$result = mysqli_query($conn, $query);

// Handle feedback messages when redirected from Q8 (edit) or Q9 (delete)
$notification = "";
if (isset($_GET["updated"])) {
    $notification = "Student updated successfully!";
} elseif (isset($_GET["deleted"])) {
    $deletedId = intval($_GET["deleted"]);
    $notification = "Student #" . $deletedId . " deleted successfully.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Q7 - Display Registered Students</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #e9ecef;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h2>Registered Students (Task 7)</h2>

    <?php if ($notification !== ""): ?>
        <p style="color: green;"><strong><?php echo htmlspecialchars($notification); ?></strong></p>
    <?php endif; ?>

    <p><a href="Q6.php">+ Add New Student (Q6.php)</a></p>

    <?php
    // Check if table has rows using mysqli_num_rows()
    if (!$result || mysqli_num_rows($result) === 0): ?>
        <p>No students registered yet.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch each row as an associative array using mysqli_fetch_assoc
                while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo (int)$row["id"]; ?></td>
                        <td><?php echo htmlspecialchars($row["name"]); ?></td>
                        <td><?php echo htmlspecialchars($row["email"]); ?></td>
                        <td><?php echo (int)$row["age"]; ?></td>
                        <td>
                            <!-- Task 8: Edit link passing student ID via GET parameter -->
                            <a href="Q8.php?id=<?php echo (int)$row["id"]; ?>">Edit</a> |
                            <!-- Task 9: Delete link passing student ID via GET parameter -->
                            <a href="Q9.php?id=<?php echo (int)$row["id"]; ?>" onclick="return confirm('Delete student #<?php echo (int)$row['id']; ?>?');">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>

