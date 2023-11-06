<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::Autoload();

$cierraSesion = isset($_POST['cierraSesion']);

if($cierraSesion){

    echo "Hola";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        funcionesLogin::logOut("login.php");

    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alumno</title>
    <link rel="stylesheet" type="text/css" href="../Styles/estilos.css">
</head>
<body style="background-color: #57BA54;">

    <form method="Post">

    <h1>Bienvenid@ Alumn@!</h1>

        <div id="cierraSesion">
            <input type="submit" value="Cerrar Sesión" name="cierraSesion">
        </div>

    </form>

</body>
</html>