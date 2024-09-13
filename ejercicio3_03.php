<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php


    $prod=array("Opel Corsa","Fiat Punto","Honda Civic","Ford Mondeo","Peugeot 306");
    $precio=array(1500, 2000, 3500, 980, 1000);
    $rebaja=20;

    for ($i= 0; $i<count($prod); $i++){

        echo($prod[$i].", Precio: ".(($precio[$i]*(100-$rebaja))/100)." (Descuento aplicado) <br> ");

    }
    ?>

</body>
</html>