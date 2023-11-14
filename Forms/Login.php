<?php

// require_once "../Helpers/funcionesLogin.php";
// require_once "../Repository/RP_Usuario.php";
// require_once "../Entities/Usuario.php";

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

                    echo "El usuario no tiene un rol asignado. Por favor, espere a ser aceptado por el administrador.";
        
                }elseif($rol == "Alumno"){
    
                    header("Location: ?menu=alumno");
                    exit;
    
                }elseif($rol == "Profesor"){
    
                    header("Location: ?menu=profesor");
                    exit;

                }elseif($rol == "Administrador"){

                    header("Location: ?menu=administrador");
                    exit;

                }
            }

            
        } 
        elseif ($resultado === false){

            echo '<h1 id="credenciales">Credenciales inválidas.</h1>';   
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

<center>
    
    <div class="datos">
        <form  action = '?menu=login' method="post">
            <h1>AUTOESCUELA LAS FUENTEZUELAS</h1> <br>
            <label>USUARIO: <input type="text" name="usuario" id="usuario">  </label><br><br>
            <label>CONTRASEÑA: <input type="password" name="contraseña" id="contraseña"> </label><br><br>
            <input type="submit" value="Acceder" name="accederLog"> <input type="submit" value="Registrarse" name="registrarse">
            <br><br>
            <a href="http://localhost/Proyecto/index.php?menu=olvidaContraseña">¿Ha olvidado su contraseña?</a>
            <br>
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