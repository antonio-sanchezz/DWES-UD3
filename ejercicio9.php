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

$fechaNacimiento = new DateTime("2003-10-03");

$hoy = new DateTime();
$edad = $hoy->diff($fechaNacimiento);

echo "Edad: " . $edad->y . "<br>";

if ($edad->y >= 18 && $edad->y < 65) {
    echo "Puede pasar dentro";
} else if ($edad->y < 18) {
    echo "No puede pasar";
} else if ($edad->y >= 65) {
    echo "Es demasiado mayor para entrar";
}

?>
</body>
</html>