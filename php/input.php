<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="input.php" method="get">
        <label for="name">Username: </label>
        <input type="text" name="name"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id=""><br><br>

        <label for="num1">Enter first Number: </label>
        <input type="number" name="num1" id=""><br>
        <label for="num2">Enter second Number: </label>
        <input type="number" name="num2"><br>
        <input type="submit" value="Submit">

    </form>
</body>
</html>

<?php
    echo $_GET["name"]."<br>";
    echo $_GET["password"]."<br>";
    echo "The sum of two numbers: ".$_GET["num1"]+$_GET["num2"];
?>