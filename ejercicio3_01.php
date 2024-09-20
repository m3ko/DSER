<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$persona1=array("Ane","Goiku","895684X");
$persona2=array("Sofia", "Cañabate", "5555555Y");


echo("<table>
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>DNI</th>
  </tr>
  <tr>
    <td>".$persona1[0]."</td>
    <td>".$persona1[1]."</td>
    <td>".$persona1[2]."</td>
  </tr>
  <tr>
    <td>".$persona2[0]."</td>
    <td>".$persona2[1]."</td>
    <td>".$persona2[2]."</td>
  </tr>
</table>")
?>
</body>
</html>