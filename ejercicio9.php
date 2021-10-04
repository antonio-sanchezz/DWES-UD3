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

$fechaNacimiento = date_create("2003-10-03");

$dia = date_format($fechaNacimiento, "d");
$mes = date_format($fechaNacimiento, "m");
$year = date_format($fechaNacimiento, "Y");

$diaActual = date("d");
$mesActual = date("m");
$yearActual = date("Y");

$edadYear = $yearActual - $year;

echo $dia . "/" . $mes . "/" . $year . "<br>";

$year_diferencia  = $yearActual - $year;
$mes_diferencia = $mesActual - $mes;
$dia_diferencia   = $diaActual - $dia;

if ($dia_diferencia < 0 || $mes_diferencia < 0) {
  $year_diferencia--;
}

if ($year_diferencia >= 18) {
    echo "Puede pasar dentro";
} else if ($year_diferencia < 18) {
    echo "No puede pasar";
} else if ($year_diferencia > 65) {
    echo "Es demasiado mayor para entrar";
}

?>
</body>
</html>