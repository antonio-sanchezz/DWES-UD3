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
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="<?php echo $nombre?>"/>
                <span style="color:red"><?php echo $errorNombre?></span>
            </p>
            <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" value="<?php echo $apellidos?>"/>
                <span style="color:red"><?php echo $errorApellidos?></span>
            </p>
            <p>
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" value="<?php echo $direccion?>"/>
                <span style="color:red"><?php echo $errorDireccion?></span>
            </p>
            <p>
                <input type="radio" id="wifi" name="red" value="wifi" <?php if ( $red == "wifi"){ echo "checked";} ?>/>
                <label for="html">Wifi</label>
                <input type="radio" id="cable" name="red" value="cable" <?php if ( $red == "cable"){ echo "checked";} ?>/>
                <label for="javascript">Cable</label>
                <input type="radio" id="fibra" name="red" value="fibra" <?php if ( $red== "fibra"){ echo "checked";} ?>/>
                <label for="javascript">Fibra</label>
                <span style="color:red"><?php echo $errorRed?></span>
            </p>
            <p>
                <label for="instituto">Instituto</label>
                <input type="text" name="instituto" value="<?php echo $instituto?>"/>
                <span style="color:red"><?php echo $errorInstituto?></span>
            </p>
            <p>
                <label for="estudios_elegidos">Estudios elegidos</label>
                <input type="text" name="estudios_elegidos" value="<?php echo $estudiosElegidos?>"/>
                <span style="color:red"><?php echo $errorEstudiosElegidos?></span>
            </p>
            <select name="dias[]" multiple>
                <option value="lunes" <?php if (in_array("lunes", $dias)){ echo "selected";}?>>Lunes</option>
                <option value="martes" <?php if (in_array("martes", $dias)){ echo "selected";}?>>Martes</option>
                <option value="miercoles" <?php if (in_array("miercoles", $dias)){ echo "selected";}?>>Miércoles</option>
                <option value="jueves" <?php if (in_array("jueves", $dias)){ echo "selected";}?>>Jueves</option>
                <option value="viernes" <?php if (in_array("viernes", $dias)){ echo "selected";}?>>Viernes</option>
                <option value="sabado" <?php if (in_array("sabado", $dias)){ echo "selected";}?>>Sábado</option>
                <option value="domingo" <?php if (in_array("domingo", $dias)){ echo "selected";}?>>Domingo</option>
            </select>
            <span style="color:red"><?php echo $errorDias?></span>
        </fieldset>
        <fieldset>
            <legend>Preferencias</legend>
            <input type="checkbox" id="historia" name="preferencias[]" value="historia" <?php if (in_array("historia", $preferencias)){ echo "checked";} ?>/>
            <label for="historia">Historia</label>
            <input type="checkbox" id="geografia" name="preferencias[]" value="geografia" <?php if (in_array("geografia", $preferencias)){ echo "checked";} ?>/>
            <label for="geografia">Geografía</label>
            <input type="checkbox" id="lengua" name="preferencias[]" value="lengua" <?php if (in_array("lengua", $preferencias)){ echo "checked";} ?>/>
            <label for="historia">Lengua</label>
            <input type="checkbox" id="matematicas" name="preferencias[]" value="matematicas" <?php if (in_array("matematicas", $preferencias)){ echo "checked";} ?>/>
            <label for="historia">Matemáticas</label><br>
            <span style="color:red"><?php echo $errorPreferencia?></span>
            <textarea id="textoFinal" name="textoFinal" rows="4" cols="50">
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