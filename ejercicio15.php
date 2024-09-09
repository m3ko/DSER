<?php

$string = "abecedario";

$pas1 = str_replace("a","X", $string);
$pas2 = str_replace("e","X",$pas1);
$pas3 = str_replace("i","X",$pas2);
$pas4 = str_replace("o","X",$pas3);
$pas5 = str_replace("u","X",$pas4);

echo("Si cambiamos las vocales de ". $string ."por X, sería: ". $pas5);

?>