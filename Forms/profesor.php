<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::Autoload();

$cierraSesion = isset($_POST['cierraSesion']);

if($cierraSesion){

    funcionesLogin::logOut("?menu=login");

}

?>

<form method="post">

    <div class="divTitulo">
        <h1>Bienvenid@ Profesor!</h1>
    </div>

    <div id="cierraSesion">
        <input type="submit" value="Cerrar Sesión" name="cierraSesion">
    </div>

</form>

<style>
    #enlace{
        display: none;
    }
</style>