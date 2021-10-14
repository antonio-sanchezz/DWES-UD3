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

    //$rutaImagen = $_FILES['imagen']['name'];
    
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
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Formulario</legend>
            <p>
                <label for="poblacion">Población</label>
                <input type="text" name="poblacion" value="<?php echo $poblacion?>"/>
                <span style="color:red"><?php echo $errorPoblacion?></span>
            </p>
            <p>
                <label for="codigoPostal">Código Postal</label>
                <input type="number" name="codigoPostal" value="<?php echo $codigoPostal?>"/>
                <span style="color:red"><?php echo $errorCodigoPostal?></span>
            </p>
            <p>
                <input type="radio" id="sevilla" name="provincia" value="sevilla" <?php if ( $provincia == "sevilla"){ echo "checked";}?>/>
                <label for="sevilla">Sevilla</label>
                <input type="radio" id="cadiz" name="provincia" value="cadiz" <?php if ( $provincia == "cadiz"){ echo "checked";}?>/>
                <label for="cadiz">Cádiz</label>
                <input type="radio" id="cordoba" name="provincia" value="cordoba" <?php if ( $provincia == "cordoba"){ echo "checked";}?>/>
                <label for="cordoba">Córdoba</label>
                <input type="radio" id="granada" name="provincia" value="granada" <?php if ( $provincia == "granada"){ echo "checked";}?>/>
                <label for="granada">Granada</label>
                <input type="radio" id="huelva" name="provincia" value="huelva" <?php if ( $provincia == "huelva"){ echo "checked";}?>/>
                <label for="huelva">Huelva</label>
                <input type="radio" id="jaen" name="provincia" value="jaen" <?php if ( $provincia == "jaen"){ echo "checked";}?>/>
                <label for="jaen">Jaén</label>
                <input type="radio" id="malaga" name="provincia" value="malaga" <?php if ( $provincia == "malaga"){ echo "checked";}?>/>
                <label for="malaga">Málaga</label>
                <input type="radio" id="almeria" name="provincia" value="almeria" <?php if ( $provincia == "almeria"){ echo "checked";}?>/>
                <label for="almeria">Almería</label>
                <span style="color:red"><?php echo $errorProvincia?></span>
            </p>
            <fieldset>
            <legend>Descripción del municipio</legend>
            <span style="color:red"></span>
            <textarea id="descripcionMunicipio" name="descripcionMunicipio" rows="4" cols="50">
            <?php echo $descripcionMunicipio?>    
            </textarea>
        </fieldset>
        <p>
        <input type="file" name="imagen" id="imagen">
        </p>
        <p>
            <input type="submit" name="enviar" value="Aceptar"/>
            <input type="reset" name="reset" value="Borrar"/>
        </p>
    </form>
<?php




?>
</body>
</html>