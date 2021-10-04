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

$trabajado = 5;
$sueldo = 40000;
$total;

if ($trabajado > 10) {
    $total = $sueldo + $sueldo*0.10;
} else if ($trabajado <= 10 && $trabajado > 5) {
    $total = $sueldo + $sueldo*0.07;
} else if ($trabajado <= 5 && $trabajado > 3) {
    $total = $sueldo + $sueldo*0.05;
} else if ($trabajado <= 3) {
    $total = $sueldo + $sueldo*0.03;
}

echo "Total: " . $total;

?>
</body>
</html>