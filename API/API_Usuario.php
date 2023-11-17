<?php
//SELECT
require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::Autoload();


//Para mostrar 

if($_SERVER["REQUEST_METHOD"]=="GET"){

    $id=$_GET['ID_Usuario']; //Obtenemos el ID del usuario
    $usuario = RP_Usuario::BuscarPorIDOBJ($id); //Busca el usuario por su ID
    $usuarioApi = new stdClass(); 
    $usuarioApi -> id=$id;
    $usuarioApi -> nombre =$usuario->getNombre();
    $usuarioApi -> contraseña = $usuario->getContraseña();
    $usuarioApi -> rol = $usuario ->getRol();

    echo json_encode($usuarioApi); 

}

//Para actualizar

if ($_SERVER["REQUEST_METHOD"]=="PUT"){

    $cuerpo = file_get_contents("php://input");
    $id=$_GET["ID_Usuario"];

    $usuario = json_decode($cuerpo);

    $usuarioApi = new stdClass();

    $usuarioApi->id=$id;
    $usuarioApi->nombre=$usuario->nombre;
    $usuarioApi->contraseña=$usuario->contraseña;
    $usuarioApi->rol=$usuario->rol;
    RP_Usuario::ActualizaPorID($id,$usuarioApi);

    
}

//Para borrar
if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    $id=$_GET["ID_Usuario"];
    RP_Usuario::BorraPorID($id);
    echo "Usuario borrado con éxito";
}

//Para añadir

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $objeto=file_get_contents("php://input");
    $usuario=json_decode($objeto);
    $usuarioApi=new stdClass();
    $usuarioApi->nombre = $usuario->nombre;
    $usuarioApi->contraseña=$usuario->contraseña;
    $usuarioApi->rol=$usuario->rol;
    RP_Usuario::InsertaObjeto($usuarioApi);

}

?>