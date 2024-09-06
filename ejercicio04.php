<?php

$num1=8;
$num2=1;
$num3=6;

if ($num1<$num2 and $num2<$num3) {
    print("Ascendente= ".$num1."," . $num2.", ". $num3." Descendente= ".$num3."," . $num2.", ". $num1);
} elseif ($num2<$num3 and $num3<$num1) {
    echo("Ascendente= ".$num2."," . $num3.", ". $num1." Descendente= ".$num1."," . $num3.", ". $num2);
}elseif ($num3<$num1 and $num1<$num3) {
    echo("Ascendente= ".$num3."," . $num1.", ". $num2." Descendente= ".$num2."," . $num1.", ". $num3);
}elseif ($num1<$num3 and $num3<$num2 ) {
    echo("Ascendente= ".$num1."," . $num3.", ". $num2." Descendente= ".$num2."," . $num3.", ". $num1);
}elseif ($num3<$num2 and $num2<$num1 ) {
    echo("Ascendente= ".$num3."," . $num2.", ". $num1." Descendente= ".$num1."," . $num2.", ". $num3);
}elseif ($num2<$num1 and $num1<$num3    ) {
    echo("Ascendente= ".$num2."," . $num1.", ". $num3." Descendente= ".$num2."," . $num1.", ". $num3);
}elseif ($num1<$num3 and $num3<$num1 ) {
    echo("Ascendente= ".$num1."," . $num3.", ". $num2." Descendente= ".$num2."," . $num3.", ". $num1);
}




?>