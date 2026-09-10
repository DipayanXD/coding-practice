<?php
$inventory = [
    ["name" => "Wireless Mouse", "price" => 549, "stock" => 25],
    ["name" => "Keyboard", "price" => 899, "stock" => 15],
    ["name" => "USB Cable", "price" => 149, "stock" => 0],
    ["name" => "Webcam", "price" => 1299, "stock" => 8],
    ["name" => "Headphones", "price" => 799, "stock" => 12]
];
foreach ($inventory as $product) {
    $status = ($product["stock"] > 0) ? "In Stock" : "Out of Stock";
    printf(
        "%-20s Rs.%-5d %s<br>",
        $product["name"],
        $product["price"],
        $status
    );
}

?>