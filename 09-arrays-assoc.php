<?php include 'includes/header.php';

$client = [
    'name' => 'Nick',
    'balance' => 500,
    'info' => [
        'type' => 'Premium',
        'available' => 100,
    ],
];

var_dump($client['info']); // Access to array inside array
echo $client['info']['type']; 

// Add to client
$client['id'] = 1;
// Replace
$client['name'] = 'New Nick';
var_dump($client);



include 'includes/footer.php';