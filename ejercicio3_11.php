<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php



$nombres = array(
    "jordi" => "Jordi Rubio",
    "toni"  => "Antonio Castaño",
    "ian"=> "Ian Morales"

);
ksort($nombres);
echo("ORDENAR POR CLAVE <br>");

foreach ($nombres as $key => $value) {

echo($key."   ". $value." <br>");
}



$nombres = array(
    "jordi" => "Jordi Rubio",
    "toni"  => "Antonio Castaño",
    "ian"=> "Ian Morales"

);
natsort($nombres);

echo("ORDENAR POR VALOR <br>");

foreach ($nombres as $key => $value) {

echo($key."   ". $value." <br>");
}


?>


</body>
</html>