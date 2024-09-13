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

    echo($prod[0]." (".$precio[0]."€) <br>"
        .$prod[1]." (".$precio[1]."€) <br>"
        .$prod[2]." (".$precio[2]."€) <br>"
        .$prod[3]." (".$precio[3]."€) <br>"
        .$prod[4]." (".$precio[4]."€) <br>");

    ?>

</body>
</html>