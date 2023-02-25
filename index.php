<?php
// Sample product list
$products = array(
    array(
        "name" => "Bricks",
        "description" => "Red bricks for construction",
        "price" => "$0.50 per piece"
    ),
    array(
        "name" => "Cement",
        "description" => "High-quality cement for strong constructions",
        "price" => "$5 per bag"
    ),
    array(
        "name" => "Wood",
        "description" => "High-quality wood for building structures",
        "price" => "$10 per board foot"
    )
);

// HTML template for displaying product list
$product_template = '
<div class="product">
    <h3>%s</h3>
    <p>%s</p>
    <p>%s</p>
</div>';

// Display all products
foreach ($products as $product) {
    echo sprintf($product_template, $product["name"], $product["description"], $product["price"]);
}
?>
