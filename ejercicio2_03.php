<?php

$pares = true;
$rand = rand(1,100);

if ($pares = true) {
        
    for ($i = 0; $i < $rand; $i=$i+2) {

        echo($i. "<br>");

    }

} else {
   
    for ($i = 1; $i < $rand; $i=$i+ 2) {
        
        echo($i);

    }
}


?>