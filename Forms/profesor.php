<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::Autoload();

$cierraSesion = isset($_POST['cierraSesion']);

if($cierraSesion){

    funcionesLogin::logOut("?menu=login");

}

?>

<form method="post">

    <div class="divTituloProf">
        <h1 id="tituloProf">Bienvenid@ Profesor!</h1>
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