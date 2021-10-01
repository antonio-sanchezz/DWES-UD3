<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
        <tr>
            <th>Elevado a</th>
            <th>Resultado</th>
        </tr>
<?php

$potencias = 7;

for($i = 0;$i < $potencias;$i++) {
    if($i != 4) {
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . pow(2,$i) . "</td>";
        echo "</tr>";
    }
    if (pow(2,$i) == 32) {
        break;
    }
}

?>
    </table>
</body>
</html>