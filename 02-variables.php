<?php include 'includes/header.php';

$name = "John Doe";
echo "<h1>Hello, my name is $name</h1>";
var_dump($name);

define('constant', "This is a constant");
echo constant;

const constant2 = "This is a constant";
echo constant2;

include 'includes/footer.php';