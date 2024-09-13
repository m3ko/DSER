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

    if (ctype_digit($num)==true ) {
        echo("El numero es un numero entero.");
    } else {
        echo("El numero no es un numero entero.");
    }


?>
</body>
</html>