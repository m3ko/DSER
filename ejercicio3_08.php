<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$personas=array(
    "nombre"    => array("Ane","Sofia"),
    "apellido"  => array("Goiku","Cañabate"),
    "DNI"       => array("895684X", "555555Y")
);

echo("<table>
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>DNI</th>
  </tr>
  <tr>
      <td>".$personas["nombre"][0]."</td>
      <td>".$personas["apellido"][0]."</td>
      <td>".$personas["DNI"][0]."</td>
  </tr>
  <tr>
      <td>".$personas["nombre"][1]."</td>
      <td>".$personas["apellido"][1]."</td>
      <td>".$personas["DNI"][1]."</td>
  </tr>
</table>")




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