<?php
require 'db.php';
// Fetch and display all student rows.
$result = mysqli_query($conn, 'SELECT * FROM students');
if (mysqli_num_rows($result) === 0) die('No students registered yet.');
echo '<table border="1" cellpadding="8"><tr><th>ID</th><th>Name</th><th>Email</th><th>Age</th><th>Actions</th></tr>';
while ($r = mysqli_fetch_assoc($result)) {
    $id = (int)$r['id'];
    $name = htmlspecialchars($r['name']);
    $email = htmlspecialchars($r['email']);
    $age = (int)$r['age'];
    echo "<tr><td>$id</td><td>$name</td><td>$email</td><td>$age</td><td>";
    echo "<a href='Q8.php?id=$id'>Edit</a> ";
    echo "<form method='post' action='Q9.php' style='display:inline'><button name='id' value='$id'>Delete</button></form>";
    echo '</td></tr>';
}
echo '</table>';
?>
