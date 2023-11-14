<?php

//  require_once "../Repository/RP_Usuario.php";
//  require_once "../Helpers/funcionesRegistro.php";

require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::Autoload();

$registrar = isset($_POST['registrarReg']);
$acceder = isset($_POST['accederReg']);


if($registrar)
{
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    $rol=$_POST['rol'];

    funcionesRegistro::registraUsuario($usuario,$contraseña,$rol);
    echo "<h1>Usuario Registrado con éxito</h1>";

}

if($acceder)
{
    header("Location: ?menu=login");
    exit;
}

?>

<center>


    <div class="datos">
        <form action = '?menu=registro' enctype="multipart/form-data"  method="post">
            <h1>REGISTRO DE USUARIOS</h1>
            <br>
            <label>NOMBRE DE USUARIO: <input type="text" name="usuario" id="usuario"> </label><br><br>
            <label>CONTRASEÑA: <input type="text" name="contraseña" id="contraseña"> </label><br><br>
            <label>ROL: <input type="text" name="rol"></label><br><br>
            <input type="submit" value="Registrar" name="registrarReg">
            <input type="submit" value="Acceder" name="accederReg">
        </form>

    </div>


</center>

<style>
    #enlace{
        display: none;
    }
    #header{
        display: none;
    }
</style>