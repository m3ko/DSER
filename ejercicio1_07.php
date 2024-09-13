<?php

$nota = 3;

if ($nota >= 1 and $nota <= 4.9) { //entre uno y 5
    echo("Nota; ".$nota. ", Es un... Suspenso");
} elseif ($nota >= 5 and $nota <= 5.9) {//entre 5 y 6
    echo("Nota; ".$nota. ", Es un... Suficiente");
} elseif ($nota >= 6 and $nota <= 6.9) { 
    echo("Nota; ".$nota. ", Es un... Bien");
}elseif ($nota >= 7 and $nota <= 8.9) {
    echo("Nota; ".$nota. ", Es un... Muy Bien");
}elseif ($nota >= 9 and $nota <= 10) {
    echo("Nota; ".$nota. ", Es un... Escelente");
}elseif ($nota >10) {
    echo("Nota; ".$nota. ", Es un... ERROR");
}






?>