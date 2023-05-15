<?php include 'includes/header.php';

$products = [
    [
        'name' => 'Shirt',
        'price' => 100,
        'available' => true
    ],
    [
        'name' => 'Jeans',
        'price' => 200,
        'available' => true
    ],
    [
        'name' => 'Shoes',
        'price' => 300,
        'available' => false
    ]
];

foreach($products as $product) {
    ?>
    <li>
        <p>Product: <?php echo $product["name"]; ?> </p>
        <p>Price: <?php echo "$" . $product["price"]; ?> </p>
        <p><?php echo ($product["available"]) ? "Available" : "Not available" ?></p>
    </li>
    <?php
}

include 'includes/footer.php';