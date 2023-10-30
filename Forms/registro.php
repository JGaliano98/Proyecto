<?php

 include "../Repository/RP_Usuario.php";

 $usuario=$_POST['usuario'];
 $contraseña=$_POST['contraseña'];
 $rol=$_POST['rol'];

 $registrar = isset($_POST['registrar']);
 $acceder = isset ($_POST['acceder']);


if ($registrar){


    if($_SERVER["REQUEST_METHOD"]="POST"){

        $ID_usuario=1;

        $objeto = new Usuario($ID_usuario,$usuario,$contraseña,$rol);

       
        $resultado = RP_Usuario::InsertaObjeto($objeto);

        echo "Usuario insertado con éxito";

    }
}

if($acceder){

    if($_SERVER["REQUEST_METHOD"]="POST"){


        header("Location:login.php");

    }


}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario registro</title>
</head>
<body>

    <form method="post" enctype="multipart/form-data">
        <h1>REGISTRO DE USUARIOS</h1>
        <br>
        <label>NOMBRE DE USUARIO: <input type="text" name="usuario" id="usuario"> </label><br><br>
        <label>CONTRASEÑA: <input type="text" name="contraseña" id="contraseña"> </label><br><br>
        <label>ROL: <input type="text" name="rol" value="rol"></label><br><br>
        <input type="submit" value="Registrar" name="registrar">
        <input type="submit" value="Acceder" name="acceder">

    </form>
    
</body>
</html>