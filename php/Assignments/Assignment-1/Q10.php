<?php

$grandTotal = 0;
for ($i = 1; $i <= 6; $i++) {
    $price = $i * 150;
    $grandTotal += $price;
    $productName = "Product $i";
?>

    <div style="
        border: 1px solid black;
        padding: 10px;
        margin: 10px;
        width: 250px;
        background-color: lightgray;
    ">

        <h3><?php echo $productName; ?></h3>

        <p>Price: ₹<?php echo $price; ?></p>

    </div>

<?php
}
echo "<h2>Grand Total: ₹$grandTotal</h2>";

?>