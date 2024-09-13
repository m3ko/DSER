<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$num = $_GET["num"];
$esPrimo = true;

for ($j = 2; $j < $num; $j++) {
    
        for ($i = 2; $i < $j; $i++) {

            if ($j % $i == 0 or $j == $i) {
            $esPrimo = false;
            
            }
        }

    if ($esPrimo) {

        echo("El numero ".$j. " Es un numero primo. <br>" );

    }else{

        echo("El numero ".$j. " NO es un numero primo. <br>");
    }
}

?>
</body>
</html>