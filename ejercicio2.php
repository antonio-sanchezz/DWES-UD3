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

$num1 = 3;
$num2 = 7;
$num3 = 1;

if($num1 > $num2 && $num1 > $num3) {
    echo $num1;
} else if($num2 > $num1 && $num2 > $num3) {
    echo $num2;
} else if($num3 > $num1 && $num3 > $num2) {
    echo $num3;
}

?>
</body>
</html>