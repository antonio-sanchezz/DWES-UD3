<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $poblacion = $_POST['poblacion'];
    $codigoPostal = $_POST['codigoPostal'];
    if (isset($_POST['provincia'])) {
        $provincia = $_POST['provincia'];
    }
    $rutaImagen = $_FILES['imagen']['name'];
    $descripcionMunicipio = $_POST['descripcionMunicipio'];

    // Hacemos seguro el campo de Descripcion del municipio.
    $descripcionMunicipio = stripslashes($descripcionMunicipio);
    $descripcionMunicipio = strip_tags($descripcionMunicipio);
    $descripcionMunicipio = htmlspecialchars($descripcionMunicipio);

    if (empty($poblacion) || empty($codigoPostal)) {
        echo "Los campos Población y Código Postal son requeridos.<br>";
    }

    if (empty($provincia)) {
        echo "Elija una provincia.<br>";
    }

    if (!empty($poblacion) && !empty($codigoPostal) && !empty($provincia)) {
        echo "¡RECIBIDO!";
    }

}
?>