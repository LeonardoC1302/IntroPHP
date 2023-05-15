<?php include 'includes/header.php';

$num1 = 20;
$num2 = 30;
$num3 = 30;
$num4 = '30';

// Greater than
echo $num2 > $num1;
// Less than
echo $num1 < $num2;
// Greater than or equal to
echo $num2 >= $num3;
// Less than or equal to
echo $num1 <= $num3;
// Equal to
echo $num3 == $num4;
// Identical
echo $num3 === $num4;
// Not equal
echo $num1 != $num2;
// -1 if left is less than right, 0 if equal, 1 if left is greater than right
echo $num1 <=> $num2;



include 'includes/footer.php';