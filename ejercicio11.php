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
<?php
$num = 1;
for ($i=1; $i<=10; $i++) {
    if ($i % 2 == 0){ 
        echo "<tr>";
    }else{
        echo "<tr bgcolor=#7de15e>";
    }
    for ($j=1; $j<=10; $j++) {
        echo "<td>". $num . "</td>";
        $num = $num + 1;
    }
    echo "</tr>"; //cerramos la fila
}
?>
</table>
</body>
</html>