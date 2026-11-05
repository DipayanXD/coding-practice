<?php
require 'db.php';
$id = (int)($_GET['id'] ?? $_POST['id'] ?? 0);
if ($id <= 0) die('Invalid student ID.');
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $age = $_POST['age'] ?? '';
    // Check submitted values before updating.
    if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        filter_var($age, FILTER_VALIDATE_INT) === false || $age <= 0) {
        $msg = 'Enter valid details.';
    } else {
        // Prepared UPDATE targets only the selected ID.
        $stmt = mysqli_prepare($conn, 'UPDATE students SET name=?,email=?,age=? WHERE id=?');
        mysqli_stmt_bind_param($stmt, 'ssii', $name, $email, $age, $id);
        if (mysqli_stmt_execute($stmt)) $msg = 'Student updated successfully!';
    }
}
// Get current values for the edit form.
$stmt = mysqli_prepare($conn, 'SELECT * FROM students WHERE id=?');
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$row = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
if (!$row) die('Student not found.');
?>
<h3>Editing Student #<?= $id ?></h3>
<?= htmlspecialchars($msg) ?><br>
<form method="post">
<input type="hidden" name="id" value="<?= $id ?>">
Name: <input name="name" value="<?= htmlspecialchars($row['name']) ?>"><br>
Email: <input name="email" value="<?= htmlspecialchars($row['email']) ?>"><br>
Age: <input name="age" value="<?= htmlspecialchars($row['age']) ?>"><br>
<button>Update</button>
</form>
