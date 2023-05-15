<?php include 'includes/header.php';

$authentication = true;
$admin = false;

if($authentication && $admin) {
    echo 'User authenticated';
} else {
    echo 'User not authenticated';
}

// Anidated if
$client = [
    'name' => 'Juan',
    'balance' => 200,
    'information' => [
        'type' => 'Premium'
    ]
];

if(!empty($client)) {
    echo 'The array is not empty';
    if($client['balance'] > 0) {
        echo 'The client has balance';
    } else {
        echo 'The client has no balance';
    }
}

// Else if
if($client['balance'] > 0) {
    echo 'The client has balance';
} else if ($client['type'] == 'Premium') {
    echo 'The client is a premium client';
} else {
    echo 'The client is not defined or has no balance';
}

// Switch
$payment = 'Cash';
switch($payment) {
    case 'Efectivo':
        echo 'The user selected Cash';
        break;
    case 'Credit Card':
        echo 'The user selected Credit Card';
        break;
    default:
        echo 'The user selected another option';
        break;
}


include 'includes/footer.php';