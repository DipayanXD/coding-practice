<?php
// BCAC501 - PHP with MySQL | Semester V
// Lab Assignment - 3 | Task 6: Inserting Form Data into the Database

require_once "db.php";

$name = "";
$email = "";
$age = "";
$errors = [];
$successMessage = "";

if (($_SERVER["REQUEST_METHOD"] ?? "") === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $age = trim($_POST["age"] ?? "");

    // Validation (combining Task 3 and Task 4)
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

        // 1. Prepare SQL statement with placeholders (?) to prevent SQL injection
        $stmt = mysqli_prepare($conn, "INSERT INTO students (name, email, age) VALUES (?, ?, ?)");

        if ($stmt) {
            // 2. Bind variables: 's' for string (name), 's' for string (email), 'i' for integer (age)
            mysqli_stmt_bind_param($stmt, "ssi", $name, $email, $ageInt);

            // 3. Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                $successMessage = "Student registered successfully!<br>(New row added to students table: " .
                    htmlspecialchars($name) . ", " .
                    htmlspecialchars($email) . ", " .
                    $ageInt . ")";

                // Clear fields after successful insertion
                $name = $email = $age = "";
            } else {
                $errors[] = "Insert failed: " . mysqli_stmt_error($stmt);
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            $errors[] = "Prepare failed: " . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Q6 - Student Registration (Database Insert)</title>
</head>
<body>
    <h2>Student Registration (Task 6)</h2>

    <?php if ($successMessage !== ""): ?>
        <p style="color: green;"><strong><?php echo $successMessage; ?></strong></p>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
        <p><strong>Please fix the following errors:</strong></p>
        <ul style="color: red;">
            <?php foreach ($errors as $error): ?>
                <li><?php echo htmlspecialchars($error); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post" action="Q6.php">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br><br>

        <label>Email:</label><br>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"><br><br>

        <label>Age:</label><br>
        <input type="text" name="age" value="<?php echo htmlspecialchars($age); ?>"><br><br>

        <button type="submit">Register</button>
    </form>

    <p><a href="Q7.php">Go to Task 7: View Students Table (Q7.php)</a></p>
</body>
</html>
