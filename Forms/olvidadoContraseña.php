
<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::autoload();

$usuario=isset($_POST['usuario']);

$enviar=isset($_POST['enviar']);
$volver=isset($_POST['volver']);


if($enviar){

    echo "<h1 id:mensajes'>Restablecimiento de contraseña enviado. Por favor, revise su correo.</h1>";
    exit;
}


if($volver){

    header("Location:http://localhost/Proyecto/index.php?menu=login");
    exit;
}

?>




<center>

    <div class="datos">
        <form method="post" enctype="multipart/form-data">
            <h1>¿Ha olvidado su contraseña?</h1>
            <br>
            <label>CORREO ELECTRÓNICO: <input type="text" name="usuario" id="usuario">  </label><br><br>
            <input type="submit" value="Enviar" name="enviar">
            <input type="submit" value="Volver" name="volver">
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