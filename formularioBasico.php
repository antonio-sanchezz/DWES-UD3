<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<?php

$errorName = "";
$errorPass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = htmlspecialchars($_POST['usuario']);
    $password = $_POST['contrasenya'];

    if (empty($user)) {
        echo "El usuario debe estar relleno<br>";
    }
    if (empty($password)) {
        echo "La contraseña debe estar rellena<br>";
    }

    if (!empty($user) && !empty($password)) {
        if(preg_match("/\w{8,}/", $user)) {
            echo "El usuario $user tiene la contraseña $password";
        } else {
            $errorName = "El usuario debe tener al menos una MAYÚSUCULA y un número<br>";
        }
        if(!preg_match("/[A-Z][a-z]{15}[0-9]/", $password)) {
            $errorPass = "Contraseña incorrecta, debe contener...";
        }
    }
}

?>
    <h1>Formulario Actividad Aula</h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
        <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" required/>
            <span style="color:red">*</span><?php echo $errorName ?>
        </p>
        <p>
            <label for="contrasenya">Contraseña</label>
            <input type="password" name="contrasenya" required/>
            <span style="color:red">*</span><?php echo $errorPass ?>
        </p>
        <p>
<input type="submit" name="enviar" value="Aceptar"/>
<input type="reset" name="cancelar" value="Cancelar"/>
  </p>
    </form>
</body>
</html>