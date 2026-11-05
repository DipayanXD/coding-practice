<?php
try {
    // Connect with PDO and enable exceptions
    $pdo = new PDO('mysql:host=localhost;dbname=lab4_db', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected successfully (PDO)<br>';
} catch (PDOException $e) { die('Connection failed.'); }

try {
    // SELECT with bindValue and fetchAll
    $s = $pdo->prepare('SELECT * FROM students WHERE id > :id');
    $s->bindValue(':id', 0, PDO::PARAM_INT);
    $s->execute();
    $rows = $s->fetchAll(PDO::FETCH_ASSOC);
    echo 'Record(s) found: ' . count($rows) . '<br>';
} catch (PDOException $e) { echo 'Select failed.<br>'; }

if (isset($_POST['update'])) {
    try {
        // UPDATE two fields using bindParam
        $s = $pdo->prepare('UPDATE students SET name=:name,email=:email WHERE id=:id');
        $s->bindParam(':name', $_POST['name']);
        $s->bindParam(':email', $_POST['email']);
        $id = (int) $_POST['id'];
        $s->bindParam(':id', $id, PDO::PARAM_INT);
        $s->execute();
        echo 'Record updated successfully.<br>';
    } catch (PDOException $e) { echo 'Update failed.<br>'; }
}
if (isset($_POST['delete'])) {
    try {
        // DELETE by ID using bindParam
        $s = $pdo->prepare('DELETE FROM students WHERE id=:id');
        $id = (int) $_POST['id'];
        $s->bindParam(':id', $id, PDO::PARAM_INT);
        $s->execute();
        echo 'Record deleted successfully.<br>';
    } catch (PDOException $e) { echo 'Delete failed.<br>'; }
}
?>
<h3>Update student</h3>
<form method="post">
    ID: <input name="id" type="number" required>
    Name: <input name="name" required>
    Email: <input name="email" type="email" required>
    <button name="update">Update</button>
</form>
<h3>Delete student</h3>
<form method="post">
    ID: <input name="id" type="number" required>
    <button name="delete">Delete</button>
</form>
