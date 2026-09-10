<?php
$name = "Rick";
$rollNo = "BCA/2024/001";
$department = "BCA";
$isTopper = true;

if ($isTopper) {
    $borderColor = "gold";
} else {
    $borderColor = "blue";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Card</title>
</head>

<body>

<div style="
    background-color: lightgray;
    border: 3px solid <?php echo $borderColor; ?>;
    font-family: Arial;
    padding: 20px;
    width: 300px;
">

    <h2><?php echo $name; ?></h2>

    <p>Roll No.: <?php echo $rollNo; ?></p>

    <p>Department: <?php echo $department; ?></p>

    <p>Programming Language: PHP</p>

</div>

</body>
</html>