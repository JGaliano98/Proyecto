<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::Autoload();

$cierraSesion = isset($_POST['cierraSesion']);
// $validaUsuarios = isset($_POST['validaUsuarios']);
$btnSi = isset($_POST['btnSi']);


if ($cierraSesion) {
    funcionesLogin::logOut("?menu=login");
}

?>

<form method="post">
    <div class="divTitulo">
        <h1>Bienvenid@ Administrador!</h1>
    </div>

    <div id="cierraSesion">
        <input type="submit" value="Cerrar Sesión" name="cierraSesion">
    </div>

    <!-- <div id="validaUsuarios">
        <input type="submit" value="Valida usuarios" name="validaUsuarios">
    </div> -->

    
</form>





<style>
    #enlace{
        display: none;
    }
   
</style>