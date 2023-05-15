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

$json = json_encode($products, JSON_UNESCAPED_UNICODE); // JSON_UNESCAPED_UNICODE is used to display special characters correctly

include 'includes/footer.php';