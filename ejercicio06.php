<?php


$num1 = 1;
$num2 = 3;
$sum = $num1+$num2;
$multi = $num1*$num2;

if ($multi>$sum) {
    echo("Numero 1=". $num1 .", Numero 2=". $num2."(El producto es mayor que la suma)");
} else if ($multi<$sum) {
    echo("Numero 1=". $num1 .", Numero 2=". $num2."(La suma es mayor que el producto)");
}




?>