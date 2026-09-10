<?php

$grandTotal = 0;

// Loop generates 6 products.
for ($i = 1; $i <= 6; $i++) {

    // Calculate price using the loop counter.
    $price = $i * 150;

    // Add current price to the grand total.
    $grandTotal += $price;

    // Product name is created using string interpolation.
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

// Display total after the loop.
echo "<h2>Grand Total: ₹$grandTotal</h2>";

?>