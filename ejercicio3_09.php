<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$mes=array(
    "mes"    => array("Enero","Febrero", "Marzo","Abril"),
    "dia"  => array(1,2,3,4,5,6,7,8,9,10)
);

echo("<table>
  <tr>
    <th>Mes</th>
    <th>Dia</th>
  </tr>
  <tr>
      <td>".$mes["mes"][3]."</td>
      <td>".$mes["dia"][5]."</td>
     
  </tr>
  <tr>
      <td>".$mes["mes"][1]."</td>
      <td>".$mes["dia"][9]."</td>

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