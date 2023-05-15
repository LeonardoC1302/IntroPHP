<?php include 'includes/header.php';

$clients1 = [];
$clients2 = array();
$clients3 = array('Pedro', 'Juan', 'Karen');
$client = [
    'name' => 'Juan',
    'balance' => 200
];

// Empty - Verify if an array is empty
var_dump(empty($clients1));
var_dump(empty($clients2));
var_dump(empty($clients3));

// Isset - Verify if a variable has been initialized
var_dump(isset($clients4));
var_dump(isset($clients3));
var_dump(isset($clients1));
var_dump(isset($clients2));

// Isset allows to check if a key exists in an associative array
var_dump( isset($client['name']) );
var_dump( isset($client['code   ']) );


include 'includes/footer.php';