<?php
$errorPoblacion = "";
$errorCodigoPostal = "";
$errorProvincia = "";
$poblacion = "";
$codigoPostal = "";
$provincia = "";
$descripcionMunicipio = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $poblacion = $_POST['poblacion'];
    $codigoPostal = $_POST['codigoPostal'];

    if (isset($_POST['provincia'])) {
        $provincia = $_POST['provincia'];
    }

    if (empty($poblacion)) {
        $errorPoblacion = "Indique una población.";
    }

    if (empty($codigoPostal)) {
        $errorCodigoPostal = "Indique un código postal.";
    }

    if (empty($provincia)) {
        $errorProvincia = "Indique una provincia.";
    }

    $rutaImagen = $_FILES['imagen']['name'];
    $descripcionMunicipio = $_POST['descripcionMunicipio'];

    // Hacemos seguro el campo de Descripcion del municipio.
    $descripcionMunicipio = stripslashes($descripcionMunicipio);
    $descripcionMunicipio = strip_tags($descripcionMunicipio);
    $descripcionMunicipio = htmlspecialchars($descripcionMunicipio);

    if (!empty($poblacion) && !empty($codigoPostal) && !empty($provincia)) {
        header("Location: correcto.php");
    }

}

?>