<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$personas=array("nombre"=>"Ane","Sofia","apellido"=>"Goiku", "Cañabate","DNI"=>"895684X", "555555Y");



echo("<table>
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>DNI</th>
  </tr>
  <tr>
    <td>".$personas[0]."</td>
    <td>".$personas[0]."</td>
    <td>".$personas[0]."</td>
  </tr>
  <tr>
    <td>".$personas[0]."</td>
    <td>".$personas[1]."</td>
    <td>".$personas[2]."</td>
  </tr>
</table>")
?>
</body>
</html>