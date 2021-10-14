<?php
$nombre = "";
$apellidos = "";
$direccion = "";
$estudiosElegidos = "";
$instituto = "";
$textoFinal = "";
$errorNombre = "";
$errorApellidos = "";
$errorDireccion = "";
$errorEstudiosElegidos = "";
$errorInstituto = "";
$errorRed = "";
$errorPreferencia = "";
$errorDias = "";
$red = "";
$dias = [];
$preferencias = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    if (isset($_POST['red'])) {
        $red = $_POST['red'];
    }
    $instituto = $_POST['instituto'];
    $estudiosElegidos = $_POST['estudios_elegidos'];
    $textoFinal = $_POST['textoFinal'];
    if (isset($_POST['preferencias'])) {
        $preferencias = $_POST['preferencias'];
    }
    if (isset($_POST['dias'])) {
        $dias = $_POST['dias'];
    }

        // Comprobamos la seguridad de la cadena.
        function check($checked) {
            $checked = stripslashes($checked);
            $checked = strip_tags($checked);
            $checked = htmlspecialchars($checked);

            return $checked;
        }

        if (empty($red)) {
            $errorRed = "La red no puede estar vacía.";
        }

        if (empty($nombre)) {
            $errorNombre = "Nombre incorrecto.";
        } else {
            $nombre = check($nombre);
        }

        if (empty($apellidos)) {
            $errorApellidos = "Apellido incorrecto.";
        } else {
            $apellidos = check($apellidos);
        }

        if (empty($direccion)) {
            $errorDireccion = "Dirección incorrecta.";
        } else {
            $direccion = check($direccion);
        }

        if(!preg_match("/^(IES)/", $instituto) || empty($instituto)) {
            $errorInstituto = "El instituto debe comenzar por IES.";
        }

        if (empty($estudiosElegidos)) {
            $errorEstudiosElegidos = "Estudio/s incorrecto/s.";
        } else {
            $estudiosElegidos = check($estudiosElegidos);
        }

        if (empty($dias)) {
            $errorDias = "Elige un dia";
        }

        if (empty($preferencias)) {
            $errorPreferencia = "Elige una preferencia";
        }

        $textoFinal = check($textoFinal);

}
    ?>