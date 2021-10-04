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

$sumFecha = $dia + $mes + $year;
$sum = 0;

do {
    if($sumFecha == 0) {
        $sumFecha = $sum;
        $sum = 0;
    }
    $sum += $sumFecha % 10;
    $sumFecha = (int)($sumFecha / 10);
} while ($sumFecha >= 1 || $sum > 9);

echo("Número mágico: " . $sum);

?>
</body>
</html>