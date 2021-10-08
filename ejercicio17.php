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
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $red = $_POST['red'];
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
            <input type="checkbox" id="historia" name="historia" value="historia">
            <label for="historia">Historia</label>
            <input type="checkbox" id="geografia" name="geografia" value="geografia">
            <label for="geografia">Geografía</label>
            <input type="checkbox" id="lengua" name="lengua" value="lengua">
            <label for="historia">Lengua</label>
            <input type="checkbox" id="matematicas" name="matematicas" value="matematicas">
            <label for="historia">Matemáticas</label><br>
            <textarea id="w3review" name="w3review" rows="4" cols="50">
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