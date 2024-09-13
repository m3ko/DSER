<?php

$contF = 0;
$contW = 0;
#for

for ($i = 0; $i < 100; $i=$i+2) {

    $contF = $contF + 2;
    echo("FOR: <br><br>".$contF."<br>");

}

#while
while ($contW < 100) {

    $contW = $contW + 2;
    echo("WHILE: <br><br>".$contW."<br>");

}

?>