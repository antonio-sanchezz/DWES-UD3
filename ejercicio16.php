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

include("funciones.inc.php");

// No existe el fichero pero no sucede nada.
include_once("funciones2.inc.php");

// Al no existir el fichero da error y termina la ejecucion del codigo.
require("funciones2.inc.php");

echo multiplicacion(3, 7);

?>
</body>
</html>