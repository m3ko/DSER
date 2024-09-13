<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$primNum=$_GET["primNum"];
$ultimNum=$_GET["ultimNum"];
$resultado=$primNum;


for ($i= $primNum; $i<$ultimNum; $i++) {

    $resultado=$resultado+$i;
    echo($resultado." " ) ;

}

?>
</body>
</html>