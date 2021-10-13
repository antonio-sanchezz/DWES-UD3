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
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['direccion']) || empty($_POST['red']) || empty($_POST['instituto']) || empty($_POST['estudios_elegidos']) || empty($_POST['dias']) || empty($_POST['preferencias'])) {
        echo "Todos los campos menos el Texto Final deben estar rellenos.";
    } else {
        echo "Realizado correctamente.";
        // Comprobamos que Nombre sea seguro.
        $nombre = stripslashes($_POST['nombre']);
        $nombre = strip_tags($nombre);
        $nombre = htmlspecialchars($nombre);

        // Comprobamos que Apellidos sea seguro.
        $apellidos = stripslashes($_POST['apellidos']);
        $apellidos = strip_tags($apellidos);
        $apellidos = htmlspecialchars($apellidos);

        // Comprobamos que Direccion sea seguro.
        $direccion = stripslashes($_POST['direccion']);
        $direccion = strip_tags($direccion);
        $direccion = htmlspecialchars($direccion);

        $red = $_POST['red'];
        $instituto = $_POST['instituto'];

        // Comprobamos que Estudios Elegidos sea seguro.
        $estudiosElegidos = stripslashes($_POST['estudios_elegidos']);
        $estudiosElegidos = strip_tags($estudiosElegidos);
        $estudiosElegidos = htmlspecialchars($estudiosElegidos);

        $diasDeLaSemana = $_POST['dias'];
        $preferencias = $_POST['preferencias'];

        // Comprobamos que el Texto Final sea seguro.
        $textoFinal = stripslashes($_POST['textoFinal']);
        $textoFinal = strip_tags($textoFinal);
        $textoFinal = htmlspecialchars($textoFinal);

        foreach($_POST['preferencias'] as $selected){
            echo $selected . "</br>";
        }
    }

}
?>


    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
        <fieldset>
            <legend>Formulario de opciones</legend>
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre"/>
            </p>
            <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos"/>
            </p>
            <p>
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion"/>
            </p>
            <p>
                <input type="radio" id="wifi" name="red" value="wifi">
                <label for="html">Wifi</label>
                <input type="radio" id="cable" name="red" value="cable">
                <label for="javascript">Cable</label>
                <input type="radio" id="fibra" name="red" value="fibra">
                <label for="javascript">Fibra</label>
            </p>
            <p>
                <label for="instituto">Instituto</label>
                <input type="text" name="instituto"/>
            </p>
            <p>
                <label for="estudios_elegidos">Estudios elegidos</label>
                <input type="text" name="estudios_elegidos"/>
            </p>
            <select name="dias" id="dias" multiple>
                <option value="lunes">Lunes</option>
                <option value="martes">Martes</option>
                <option value="miercoles">Miércoles</option>
                <option value="jueves">Jueves</option>
                <option value="viernes">Viernes</option>
                <option value="sabado">Sábado</option>
                <option value="domingo">Domingo</option>
            </select> 
        </fieldset>
        <fieldset>
            <legend>Preferencias</legend>
            <input type="checkbox" id="historia" name="preferencias[]" value="historia">
            <label for="historia">Historia</label>
            <input type="checkbox" id="geografia" name="preferencias[]" value="geografia">
            <label for="geografia">Geografía</label>
            <input type="checkbox" id="lengua" name="preferencias[]" value="lengua">
            <label for="historia">Lengua</label>
            <input type="checkbox" id="matematicas" name="preferencias[]" value="matematicas">
            <label for="historia">Matemáticas</label><br>
            <textarea id="textoFinal" name="textoFinal" rows="4" cols="50">
            Inserte aquí el texto
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