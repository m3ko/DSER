<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $numeros=array(rand(1,100), rand(1,100), rand(1,100),rand(1,100), rand(1,100), rand(1,100),rand(1,100), rand(1,100), rand(1,100), rand(1,100));
    #sort($numeros);

    for ($i = 0; $i < count($numeros); $i++) {
    
        echo(($numeros[$i])." ");
    }
    
    echo"<br>";
    print_r($numeros);
    echo"<br>";
    
    $numeros=array_reverse($numeros);
    for ($i = 0; $i < count($numeros); $i++) {

    
    echo(($numeros[$i]." "));
    }
   
    
?>
</body>
</html>