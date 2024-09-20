<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$semana=array(
    "dia"    => array("Lunes","Martes", "Miercoles","Jueves","Viernes","Sabado","Domingo"),
    "valor"  => array(34,66,23,1,78,345,100)
);

echo("<table>
  <tr>
      <td>".$semana["dia"][0]."</td>
      <td>".$semana["valor"][0]."</td>

  </tr>
  <tr>
      <td>".$semana["dia"][1]."</td>
      <td>".$semana["valor"][1]."</td>

  </tr>
  <tr>
      <td>".$semana["dia"][2]."</td>
      <td>".$semana["valor"][2]."</td>

  </tr>
  <tr>
      <td>".$semana["dia"][3]."</td>
      <td>".$semana["valor"][3]."</td>

  </tr>
  <tr>
      <td>".$semana["dia"][4]."</td>
      <td>".$semana["valor"][4]."</td>

  </tr>
  <tr>
      <td>".$semana["dia"][5]."</td>
      <td>".$semana["valor"][5]."</td>

  </tr>
  <tr>
      <td>".$semana["dia"][6]."</td>
      <td>".$semana["valor"][6]."</td>

  </tr>
  <tr>
      <td>Media: ".($semana["valor"][0]+$semana["valor"][1]+$semana["valor"][2]+$semana["valor"][3]+$semana["valor"][4]+$semana["valor"][5]+$semana["valor"][6])/7.
      ."</td><td>Suma: ".($semana["valor"][0]+$semana["valor"][1]+$semana["valor"][2]+$semana["valor"][3]+$semana["valor"][4]+$semana["valor"][5]+$semana["valor"][6])."</td>

  </tr>
</table>");




/*
$fruits = array (
    "frutas"  => array("a" => "naranja", "b" => "plátano", "c" => "manzana"),
    "números" => array(1, 2, 3, 4, 5, 6),
    "hoyos"   => array("primero", 5 => "segundo", "tercero")
);

foreach($fruits["frutas"] as $clave => $valor){

  echo("".$clave."".$valor)."";

} 
*/

?>
</body>
</html>