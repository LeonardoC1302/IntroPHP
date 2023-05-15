<?php include 'includes/header.php';

$shoppingCart = ['Tablet', 'Phone', 'Laptop', 'Keyboard', 'Mouse', 'Headphones'];

// View contents
var_dump($shoppingCart);
// Access element of array
echo $shoppingCart[0];
// Add element to array
$shoppingCart[6] = 'Monitor';
// Add at the end of array
array_push($shoppingCart, 'Microphone');
// Add at the beginning of array
array_unshift($shoppingCart, 'Smartwatch');

// Other style (more used in wordpress)
$clients = array('Client 1', 'Client 2', 'Client 3');
echo $clients[1];



include 'includes/footer.php';