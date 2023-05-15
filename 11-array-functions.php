<?php include 'includes/header.php';

// Search in array
$clients = ['Pedro', 'Juan', 'Karen'];
echo '<pre>';
var_dump( array_search('Karen', $clients) );
var_dump( array_search('Pedro', $clients) );
var_dump( array_search('Pablo', $clients) );
echo '</pre>';

// Order elements
$numbers = [1, 3, 4, 6, 5];
sort($numbers);
rsort($numbers);

// Order associative arrays
$clients = [
    'saldo' => 200,
    'type' => 'Premium',
    'name' => 'Juan'
];
echo '<pre>';
var_dump($clients);

asort($clients); // Order by value
var_dump($clients);

ksort($clients); // Order by key
var_dump($clients);

arsort($clients); // Order by value in reverse
var_dump($clients);

krsort($clients); // Order by key in reverse
var_dump($clients);

include 'includes/footer.php';