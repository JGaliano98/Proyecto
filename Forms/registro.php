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

    if(RP_Usuario::existeUsuario($usuario)==true){
        ?><script>alert("El nombre de usuario ya existe. Elija otro nombre de usuario para poder registrarse.");</script><?php
    } else {
        funcionesRegistro::registraUsuario($usuario,$contraseña,$rol);
        ?><script>alert("Usuario registrado con éxito.");</script><?php
    }

}

if($acceder)
{
    header("Location: ?menu=login");
    exit;
}

?>

    <div class="datos">
        <div class="datosRegistro">
            <form action = '?menu=registro' enctype="multipart/form-data"  method="post">
                <h1 id="titulo">REGISTRO DE USUARIOS</h1>
                <br>
                <label id="lblusuario">NOMBRE DE USUARIO:</label><br>
                <input type="text" id="txtUsuario" name="usuario" id="usuario"><br><br>
                <label id="lblcontraseña">CONTRASEÑA:  </label><br>
                <input type="text" id="txtContraseña" name="contraseña" id="contraseña"><br><br>
                <label id="lblRol">ROL: </label><br>
                <input type="text" id="txtRol" name="rol"><br><br>
                <input type="submit" value="Registrar" name="registrarReg" id="btnRegistrarR">
                <input type="submit" value="Acceder" name="accederReg" id="btnAccederR">
            </form>
        </div>
    </div>


<style>
    #enlace{
        display: none;
    }
    #header{
        display: none;
    }
</style>