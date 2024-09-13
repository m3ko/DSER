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

for ($i = 2; $i < $num; $i++) {

        if ($num % $i == 0) {
            $esPrimo = false;
        }
}

if ($esPrimo==true) {

    echo("El numero ".$num. " Es un numero primo.");

}else{

    echo("El numero ".$num. " NO es un numero primo.");
}


?>
</body>
</html>