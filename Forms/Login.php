<?php

require_once "../Helpers/funcionesLogin.php";
require_once "../Repository/RP_Usuario.php";
require_once "../Entities/Usuario.php";

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];


$acceder = isset($_POST['acceder']);
$registrarse = isset($_POST['registrarse']);


if ($acceder){

    if($_SERVER["REQUEST_METHOD"] == "POST"){



        $resultado = LOGIN::existeUsuario($usuario,$contraseña); //TODO METODO COMPRUEBAUSUARIO.

        if ($resultado === true){


            $usuario = RP_Usuario::BuscaPorUsuario($usuario);


            foreach($usuario as $dato){

                $rol=$dato->getRol();

            

                if ($rol == null){

                    echo "El usuario no tiene un rol asignado. Por favor, espere a ser aceptado por el administrador.";
        
                }elseif($rol == "Alumno"){
    
                    header("Location: alumno.php");
    
                }elseif($rol == "Profesor"){
    
                    header("Location: profesor.php");
                    
                }elseif($rol == "Administrador"){

                    header("Location: administrador.php");

                }


            }



          

           


            //TODO hacer método login y método iniciarSesion.

            
        } elseif ($resultado === false){

            echo "Credenciales inválidas.";
        }

    }
}

if ($registrarse){

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        //header a formulario de registro.

        header("Location: registro.php");

        
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body style="background-color: #57BA54;">
    <center>
        <form method="post" action="login.php">
            <h1>AUTOESCUELA LAS FUENTEZUELAS</h1> <br>
            <label>USUARIO: <input type="text" name="usuario" id="usuario">  </label><br><br>
            <label>CONTRASEÑA: <input type="text" name="contraseña" id="contraseña"> </label><br><br>
            <input type="submit" value="Acceder" name="acceder"> <input type="submit" value="Registrarse" name="registrarse">
            <br><br>
            <a href="olvidadoContraseña.php">¿Ha olvidado su contraseña?</a>
            <br>
        </form>
    </center>
</body>
</html>