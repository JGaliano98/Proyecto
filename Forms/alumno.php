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

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    
        
    <div id="navegador">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>


    
</div>


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