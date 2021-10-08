<?php

//$user = $_GET['usuario'];
//$password = $_GET['contrasenya'];

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
        echo "El usuario debe tener al menos una MAYÚSUCULA y un número<br>";
    }
    if(!preg_match("/[A-Z][a-z]{15}[0-9]/", $password)) {
        echo "Contraseña incorrecta, debe contener...";
    }
}

?>