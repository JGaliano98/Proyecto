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


<form method="post">

<div class="divTituloAlum">
    <h1 id="tituloAlum">Bienvenid@ Alumn@!</h1>
</div>

<div id="cierraSesion">
    <input type="submit" id="btnCierraSesion" value="Cerrar Sesión" name="cierraSesion">
</div>

</form>

<style>
    #enlace{
        display: none;
    }
</style>