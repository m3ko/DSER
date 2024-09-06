<?php

$cant_min = rand(1,100);
$eur = 0;
$min = 0;

for ($min = 0; $min < $cant_min; $min++){

    if ($min>0 and $min <3) {
        $eur = 0.10;
    } elseif ($min>2.9){
        $eur = $eur + 0.05;
    }
    

}

echo("Cant. Min =".$cant_min.", precio=".$eur);

?>