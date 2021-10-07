<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$productos[] = array("Nombre"=>"Leche","Precio"=>"0.10","Stock"=>"true","Identificador"=>"0545");
$productos[] = array("Nombre"=>"Pan","Precio"=>"0.53","Stock"=>"true","Identificador"=>"5635");
$productos[] = array("Nombre"=>"Huevos","Precio"=>"2.85","Stock"=>"false","Identificador"=>"4536");

echo "<table border='1'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Precio</th>";
echo "<th>Stock</th>";
echo "<th>Identificador</th>";
echo "</tr>";

foreach ($productos as $row) {
    echo "<tr>";
    echo "<td>" . $row['Nombre'] . "</td>";
    echo "<td>" . $row['Precio'] . "</td>";
    echo "<td>" . $row['Stock'] . "</td>";
    echo "<td>" . $row['Identificador'] . "</td>";
    echo "</tr>";
}

?>
</table>
</body>
</html>