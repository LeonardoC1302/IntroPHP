<?php include 'includes/header.php';

// For loop
for($i = 0; $i < 10; $i++) {
    echo $i . '<br />';
}

// While loop
$i = 0;
while($i < 10) {
    echo $i . '<br />';
    $i++;
}

// Do while loop
$i = 0;
do {
    echo $i . '<br />';
    $i++;
} while($i < 10);

// For each
$clients = ['Pedro', 'Juan', 'Karen'];
foreach($clients as $client) {
    echo $client . '<br />';
}

for($i = 0; $i < count($clients); $i++) {
    echo $clients[$i] . '<br />';
}

$clients = [
    'name' => 'Juan',
    'balance' => 200,
    'information' => [
        'type' => 'Premium'
    ]
];

foreach($clients as $key => $value) {
    echo $key . ' - ' . $value . '<br />';
}

include 'includes/footer.php';