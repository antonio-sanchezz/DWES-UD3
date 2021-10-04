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

$fechaNacimiento = date_create("1989-07-05");

$dia = date_format($fechaNacimiento, "d");
$mes = date_format($fechaNacimiento, "m");
$year = date_format($fechaNacimiento, "Y");
$total;
$numeroMagico = 0;

$total = $dia + $mes + $year;

for ($i = 0; strlen($total) > $i;$i++) {
    $numeroMagico = $numeroMagico + substr($total, $i, 1);
}

echo "Número mágico: " . $numeroMagico;

?>
</body>
</html>