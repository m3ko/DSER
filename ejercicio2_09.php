<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    $num = $_GET["numero"];

    for ($i=0; $i < 10; $i++) { 
        
        echo($num." x ".$i." = ".$num*$i."<br>");

    }


?>
</body>
</html>