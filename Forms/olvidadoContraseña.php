
<?php

$usuario=isset($_POST['usuario']);

$enviar=isset($_POST['enviar']);
$volver=isset($_POST['volver']);


if($enviar){

    echo "Restablecimiento de contraseña enviado. Por favor, revise su correo.";
}


if($volver){

    header("Location:login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Ha olvidado su contraseña?</title>
</head>
<body style="background-color: #57BA54;">
    <center>
        <form method="post" enctype="multipart/form-data">
            <h1>¿Ha olvidado su contraseña?</h1>
            <br>
            <label>CORREO ELECTRÓNICO: <input type="text" name="usuario" id="usuario">  </label><br><br>
            <input type="submit" value="Enviar" name="enviar">
            <input type="submit" value="Volver" name="volver">
        </form>
    </center>

</body>
</html>