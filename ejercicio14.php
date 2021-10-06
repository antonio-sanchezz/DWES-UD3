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

$meses = [];

$meses[] = "Enero";
$meses[] = "Febrero";
$meses[] = "Marzo";

print_r($meses);
echo "<br>";
echo "Cantidad:" . count($meses) . "<br>";

$meses[] = 7;
$meses[] = "Abril";
$meses[] = true;
$meses[] = "Junio";

print_r($meses);
echo "<br>";
echo "Cantidad:" . count($meses) . "<br>";

unset($meses[3]);

$meses[5] = "Mayo";
$meses[7] = "Julio";
$meses[8] = "Agosto";
$meses[9] = "Septiembre";
$meses[10] = "Octubre";
$meses[11] = "Noviembre";
$meses[12] = "Diciembre";

print_r($meses);

?>
</body>
</html>