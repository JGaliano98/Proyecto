<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::Autoload();

$cierraSesion = isset($_POST['cierraSesion']);
$muestraExamen = isset($_POST['muestraExamen']);

if($cierraSesion){

    funcionesLogin::logOut("?menu=login");

}

if($muestraExamen){

    header("Location: ?menu=muestraExamen");

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

    <form method="post">

        <div class="divTitulo">
            <h1>Bienvenid@ Alumn@!</h1>
        </div>
        

        <div id="cierraSesion">
            <input type="submit" value="Cerrar Sesión" name="cierraSesion">
        </div>

        <div id="muestraExamen">
            <input type="submit" value="Mostrar examen" name="muestraExamen">
        </div>

    </form>

</body>
</html>

<style>
    #enlace{
        display: none;
    }
</style>