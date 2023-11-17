<?php


require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::Autoload();


$acceder = isset($_POST['accederLog']);
$registrarse = isset($_POST['registrarse']);




if ($acceder){

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];


        $resultado = funcionesLogin::existeUsuario($usuario,$contraseña);

        if ($resultado === true){

            $usuario = RP_Usuario::BuscaPorUsuario($usuario);
            funcionesLogin::logIn($usuario);
            


            foreach($usuario as $dato){

                $rol=$dato->getRol();
                
                if ($rol == null){
                    ?><script>alert("El usuario no tiene un rol asignado. Por favor, espere a ser aceptado por el administrador.");</script><?php

        
                }elseif($rol == "Alumno"){
                    session::iniciarSesion();
                    session::guardarSesion('USER',$usuario);
    
                    header("Location: ?menu=alumno");
                    exit;
    
                }elseif($rol == "Profesor"){
                    session::iniciarSesion();
                    session::guardarSesion('USER',$usuario);
    
                    header("Location: ?menu=profesor");
                    exit;

                }elseif($rol == "Administrador"){
                    session::iniciarSesion();
                    session::guardarSesion('USER',$usuario);

                    header("Location: ?menu=administrador");
                    exit;

                }
            }

            
        } 
        elseif ($resultado === false){

            ?><script>alert("Credenciales inválidas.");</script><?php
           
        }

    }
}

if ($registrarse){
    // if($_SERVER["REQUEST_METHOD"]=="POST"){

    //     //header a formulario de registro
        header("Location: ?menu=registro");
        exit;
    // }

}


?>


    
<div class="datos">
    <div class="contenidoLogin">
        <form  action = '?menu=login' method="post">
            <h1 id="titulo">AUTOESCUELA FUENTEZUELAS</h1> <br>
            <label id="lblusuario">USUARIO:</label><br>
            <input type="text" name="usuario" id="txtusuario">  <br><br>
            <label id="lblcontraseña">CONTRASEÑA: </label><br>
            <input type="password" name="contraseña" id="txtcontraseña"><br><br>
            <input type="submit" id="btnAcceder" value="Acceder" name="accederLog"> <input type="submit" id="btnRegistrarse" value="Registrarse" name="registrarse">
            <br><br>
            <a id="olvidoContraseña" href="http://localhost/Proyecto/index.php?menu=olvidaContraseña">¿Ha olvidado su contraseña?</a>
            <br>
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