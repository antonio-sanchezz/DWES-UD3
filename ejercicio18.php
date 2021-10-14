<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="correcto.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Formulario</legend>
            <p>
                <label for="poblacion">Población</label>
                <input type="text" name="poblacion"/>
            </p>
            <p>
                <label for="codigoPostal">Código Postal</label>
                <input type="number" name="codigoPostal"/>
            </p>
            <p>
                <input type="radio" id="wifi" name="provincia" value="wifi"/>
                <label for="html">Wifi</label>
                <input type="radio" id="cable" name="provincia" value="cable"/>
                <label for="javascript">Cable</label>
                <input type="radio" id="fibra" name="provincia" value="fibra"/>
                <label for="javascript">Fibra</label>
                <input type="radio" id="fibra" name="provincia" value="fibra"/>
                <label for="javascript">Fibra</label>
                <input type="radio" id="fibra" name="provincia" value="fibra"/>
                <label for="javascript">Fibra</label>
                <input type="radio" id="fibra" name="provincia" value="fibra"/>
                <label for="javascript">Fibra</label>
                <input type="radio" id="fibra" name="provincia" value="fibra"/>
                <label for="javascript">Fibra</label>
                <input type="radio" id="fibra" name="provincia" value="fibra"/>
                <label for="javascript">Fibra</label>
            </p>
            <fieldset>
            <legend>Descripción del municipio</legend>
            <span style="color:red"></span>
            <textarea id="descripcionMunicipio" name="descripcionMunicipio" rows="4" cols="50">
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