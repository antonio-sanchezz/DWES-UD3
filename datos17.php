<?php
if (empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['direccion']) || empty($_POST['red']) || empty($_POST['instituto']) || empty($_POST['estudios_elegidos']) || empty($_POST['dias']) || empty($_POST['preferencias'])) {
        echo "Todos los campos menos el Texto Final deben estar rellenos.";
    } else {

        // Comprobamos que Nombre sea seguro.
        $nombre = stripslashes($_POST['nombre']);
        $nombre = strip_tags($nombre);
        $nombre = htmlspecialchars($nombre);

        echo "Nombre: " . $nombre . "<br>";

        // Comprobamos que Apellidos sea seguro.
        $apellidos = stripslashes($_POST['apellidos']);
        $apellidos = strip_tags($apellidos);
        $apellidos = htmlspecialchars($apellidos);

        echo "Apellidos: " . $apellidos . "<br>";

        // Comprobamos que Direccion sea seguro.
        $direccion = stripslashes($_POST['direccion']);
        $direccion = strip_tags($direccion);
        $direccion = htmlspecialchars($direccion);

        echo "Dirección: " . $direccion . "<br>";

        $red = $_POST['red'];

        echo "Red: " . $red . "<br>";

        $instituto = $_POST['instituto'];

        if(preg_match("/^(IES)/", $instituto)) {
            echo "Instituto: " . $instituto . "<br>";
        } else {
            echo "El instituto debe comenzar por IES.<br>";
        }

        // Comprobamos que Estudios Elegidos sea seguro.
        $estudiosElegidos = stripslashes($_POST['estudios_elegidos']);
        $estudiosElegidos = strip_tags($estudiosElegidos);
        $estudiosElegidos = htmlspecialchars($estudiosElegidos);

        echo "Estudios elegidos: " . $estudiosElegidos . "<br>";

        echo "Días de la semana:<br>";
        foreach($_POST['dias'] as $dia){
            echo $dia . "</br>";
        }

        echo "Preferencias:<br>";
        foreach($_POST['preferencias'] as $selected){
            echo $selected . "</br>";
        }

        // Comprobamos que el Texto Final sea seguro.
        $textoFinal = stripslashes($_POST['textoFinal']);
        $textoFinal = strip_tags($textoFinal);
        $textoFinal = htmlspecialchars($textoFinal);

        echo "Texto final: " . $textoFinal . "<br>";
    }
    ?>