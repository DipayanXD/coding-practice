<?php
// BCAC501 - PHP with MySQL | Semester V
// Lab Assignment - 3 | Task 10: Combining File Handling and Database (Activity Log)

require_once "db.php";

$name = "";
$email = "";
$age = "";
$errors = [];
$message = "";
$logFile = "activity_log.txt";

// If ?view=log is requested, render only the activity log page
$viewOnlyLog = isset($_GET["view"]) && $_GET["view"] === "log";

if (($_SERVER["REQUEST_METHOD"] ?? "") === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $age = trim($_POST["age"] ?? "");

    // Server-side validation
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

        // 1. Prepared INSERT statement into students table (database is source of truth)
        $stmt = mysqli_prepare($conn, "INSERT INTO students (name, email, age) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "ssi", $name, $email, $ageInt);

        // 2. Only write to log AFTER execute confirms database insert succeeded
        if (mysqli_stmt_execute($stmt)) {
            // Generate current timestamp using date()
            $timestamp = date("Y-m-d H:i:s");
            $logLine = "[" . $timestamp . "] Registered: " . $name . " (" . $email . ")" . PHP_EOL;

            // Append to activity_log.txt
            $file = fopen($logFile, "a");
            if ($file) {
                fwrite($file, $logLine);
                fclose($file);
                $message = "Student registered successfully and activity logged!";
            } else {
                $message = "Student registered in database, but could not open activity log file.";
            }

            // Clear form
            $name = $email = $age = "";
        } else {
            $errors[] = "Database insert failed: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Q10 - Activity Log & Registration</title>
</head>
<body>
<?php if ($viewOnlyLog): ?>
    <h2>Activity Log:</h2>
    <div style="font-family: monospace; background: #f4f4f4; padding: 12px; border: 1px solid #ddd;">
        <?php
        if (!file_exists($logFile)) {
            echo "No activity has been recorded yet.";
        } else {
            $file = fopen($logFile, "r");
            if ($file) {
                $hasLines = false;
                while (!feof($file)) {
                    $line = fgets($file);
                    if ($line !== false && trim($line) !== "") {
                        echo htmlspecialchars(trim($line)) . "<br>";
                        $hasLines = true;
                    }
                }
                fclose($file);
                if (!$hasLines) {
                    echo "No activity has been recorded yet.";
                }
            } else {
                echo "Could not read the activity log.";
            }
        }
        ?>
    </div>
    <p><a href="Q10.php">&larr; Back to Registration Form (Q10.php)</a></p>

<?php else: ?>
    <h2>Student Registration with Activity Log (Task 10)</h2>

    <?php if ($message !== ""): ?>
        <p style="color: green;"><strong><?php echo htmlspecialchars($message); ?></strong></p>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
        <p><strong>Please fix the following errors:</strong></p>
        <ul style="color: red;">
            <?php foreach ($errors as $error): ?>
                <li><?php echo htmlspecialchars($error); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post" action="Q10.php">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br><br>

        <label>Email:</label><br>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"><br><br>

        <label>Age:</label><br>
        <input type="text" name="age" value="<?php echo htmlspecialchars($age); ?>"><br><br>

        <button type="submit">Register and Log Activity</button>
    </form>

    <hr style="margin: 25px 0;">

    <h3>Activity Log:</h3>
    <div style="font-family: monospace; background: #f4f4f4; padding: 12px; border: 1px solid #ddd; max-width: 600px;">
        <?php
        if (!file_exists($logFile)) {
            echo "No activity has been recorded yet.";
        } else {
            $file = fopen($logFile, "r");
            if ($file) {
                $hasLines = false;
                while (!feof($file)) {
                    $line = fgets($file);
                    if ($line !== false && trim($line) !== "") {
                        echo htmlspecialchars(trim($line)) . "<br>";
                        $hasLines = true;
                    }
                }
                fclose($file);
                if (!$hasLines) {
                    echo "No activity has been recorded yet.";
                }
            } else {
                echo "Could not read the activity log.";
            }
        }
        ?>
    </div>
    <p><a href="Q10.php?view=log">Open Log View Only (Q10.php?view=log)</a></p>
<?php endif; ?>
</body>
</html>
