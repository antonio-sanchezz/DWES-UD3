<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once 'datos17.php';?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <legend>Formulario de opciones</legend>
            <p>
                <label for="poblacion">Población</label>
                <input type="text" name="poblacion" value="<?php echo $nombre?>"/>
                <span style="color:red"><?php echo $errorNombre?></span>
            </p>
            <p>
                <label for="codigoPostal">Código Postal</label>
                <input type="number" name="codigoPostal" value="<?php echo $apellidos?>"/>
                <span style="color:red"><?php echo $errorApellidos?></span>
            </p>
            <p>
                <input type="provincia" id="wifi" name="red" value="wifi" <?php if ( $red == "wifi"){ echo "checked";} ?>/>
                <label for="html">Wifi</label>
                <input type="provincia" id="cable" name="red" value="cable" <?php if ( $red == "cable"){ echo "checked";} ?>/>
                <label for="javascript">Cable</label>
                <input type="provincia" id="fibra" name="red" value="fibra" <?php if ( $red== "fibra"){ echo "checked";} ?>/>
                <label for="javascript">Fibra</label>
                <input type="provincia" id="fibra" name="red" value="fibra" <?php if ( $red== "fibra"){ echo "checked";} ?>/>
                <label for="javascript">Fibra</label>
                <input type="provincia" id="fibra" name="red" value="fibra" <?php if ( $red== "fibra"){ echo "checked";} ?>/>
                <label for="javascript">Fibra</label>
                <input type="provincia" id="fibra" name="red" value="fibra" <?php if ( $red== "fibra"){ echo "checked";} ?>/>
                <label for="javascript">Fibra</label>
                <input type="provincia" id="fibra" name="red" value="fibra" <?php if ( $red== "fibra"){ echo "checked";} ?>/>
                <label for="javascript">Fibra</label>
                <input type="provincia" id="fibra" name="red" value="fibra" <?php if ( $red== "fibra"){ echo "checked";} ?>/>
                <label for="javascript">Fibra</label>
                <span style="color:red"><?php echo $errorRed?></span>
            </p>
            <fieldset>
            <legend>Descripción del municipio</legend>
            <span style="color:red"><?php echo $errorPreferencia?></span>
            <textarea id="descripcionMunicipio" name="descripcionMunicipio" rows="4" cols="50">
            <?php echo $textoFinal?>
            </textarea>
        </fieldset>
        <p>
<input type="submit" name="enviar" value="Aceptar"/>
  </p>
    </form>
<?php




?>
</body>
</html>