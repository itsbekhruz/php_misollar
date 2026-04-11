<?php
// $prices = ["Apple" => 1.50, "Banana" => 0.80];

// foreach ($prices as $fruit => $price) {
//     echo "The price of " . $fruit . " is $" . $price . "<br>";
// }


$total = 0;
$shopping = ["laptop" => 1000, "mouse" => 25, "keyboard" => 50];
foreach ($shopping as $item => $cost){
    echo "the cost of $item is $cost <br>";
    $total += $cost;
    
}
ECHO "the total is $total <br>";

?>