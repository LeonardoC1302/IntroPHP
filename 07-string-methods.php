<?php include 'includes/header.php';

$client = 'John Doe';

// Length
echo strlen($client);
// Delete whitespace
echo trim($client);
// String to uppercase
echo strtoupper($client);
// String to lowercase
echo strtolower($client);

$email1 = 'email@email.com';
$email2 = 'email@email.com';
// Replace
echo str_replace('John', 'Joe', $client);
// Check if exists
echo strpos($client, 'Nick');

$clientType = 'premium';
// Concatenate
echo "The client " . $client . " is " . $clientType;
echo "The client {$client} is {$clientType}";

include 'includes/footer.php';