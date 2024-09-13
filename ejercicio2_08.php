<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$pares = $_GET["pares"];
$rand = rand(1,100);

if ($pares = true) {
        
    for ($i = 0; $i < $rand; $i=$i+2) {

        echo($i. "<br>");

    }

} else if($pares=false){
   
    for ($i = 1; $i < $rand; $i=$i+ 2) {
        
        echo($i);

    }
}


?>
</body>
</html>