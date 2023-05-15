<?php 
declare(strict_types=1);
include 'includes/header.php';

function add(int $num1 = 0, int $num2 = 0) {
    echo $num1 + $num2;
}
add(10, 5);
add(20);

// Named parameters
add(num1: 10, num2: 5);


include 'includes/footer.php';