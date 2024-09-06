<?php

$nota1=rand(0,10);
$nota2=rand(0,10);

$media=($nota1+$nota2)/2;

if ($media<5) {
    echo("Nota: ".$media.", es un SUSPENSO.");
} else {
    echo("Nota: ".$media.", es un APROBADO.");
}


?>