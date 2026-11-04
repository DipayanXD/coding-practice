<?php
// BCAC501 - PHP with MySQL | Semester V
// Lab Assignment - 3 | Task 8: Updating a Record

require_once "db.php";

// 1. Never trust id from $_GET blindly; cast with intval()
$id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;

if ($id <= 0) {
    die("Invalid student ID. <a href='Q7.php'>Back to Students Table (Q7.php)</a>");
}

$errors = [];
$message = "";

// 2. Fetch the existing row using prepared statement to pre-fill the form
$selectStmt = mysqli_prepare($conn, "SELECT name, email, age FROM students WHERE id = ?");
mysqli_stmt_bind_param($selectStmt, "i", $id);
mysqli_stmt_execute($selectStmt);
$result = mysqli_stmt_get_result($selectStmt);
$student = mysqli_fetch_assoc($result);
mysqli_stmt_close($selectStmt);

if (!$student) {
    die("Student not found. <a href='Q7.php'>Back to Students Table (Q7.php)</a>");
}

$name = $student["name"];
$email = $student["email"];
$age = (string)$student["age"];

if (($_SERVER["REQUEST_METHOD"] ?? "") === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $age = trim($_POST["age"] ?? "");

    // Validation
    if ($name === "") {
        $errors[] = "Name is required.";
    }
    if ($email === "") {
        $errors[] = "Email is required.";
    } elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $errors[] = "Please enter a valid email address.";
    }
    if ($age === "" || !ctype_digit($age) || (int)$age <= 0) {
        $errors[] = "Age must be a positive number.";
    }

    if (empty($errors)) {
        $ageInt = (int)$age;

        // 3. Update using prepared UPDATE statement
        $updateStmt = mysqli_prepare($conn, "UPDATE students SET name = ?, email = ?, age = ? WHERE id = ?");
        // Bind types: "ssii" (name: string, email: string, age: int, id: int)
        mysqli_stmt_bind_param($updateStmt, "ssii", $name, $email, $ageInt, $id);

        if (mysqli_stmt_execute($updateStmt)) {
            mysqli_stmt_close($updateStmt);
            // Redirect back to listing page with update flag
            header("Location: Q7.php?updated=1");
            exit();
        } else {
            $message = "Could not update student: " . mysqli_stmt_error($updateStmt);
            mysqli_stmt_close($updateStmt);
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Q8 - Edit Student</title>
</head>
<body>
    <h2>Editing Student #<?php echo $id; ?> (Task 8)</h2>

    <?php if ($message !== ""): ?>
        <p style="color: red;"><strong><?php echo htmlspecialchars($message); ?></strong></p>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
        <p><strong>Please fix the following errors:</strong></p>
        <ul style="color: red;">
            <?php foreach ($errors as $error): ?>
                <li><?php echo htmlspecialchars($error); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post" action="Q8.php?id=<?php echo $id; ?>">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br><br>

        <label>Email:</label><br>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"><br><br>

        <label>Age:</label><br>
        <input type="text" name="age" value="<?php echo htmlspecialchars((string)$age); ?>"><br><br>

        <button type="submit">Update Student</button>
        <a href="Q7.php">Cancel</a>
    </form>
</body>
</html>
