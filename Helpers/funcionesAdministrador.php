<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::Autoload();

class funcionesAdministrador{

    public static function validaUsuario (){

        $usuariosNulos = RP_Usuario::muestraUsuariosRolNulo();

        return $usuariosNulos;        
    }

}



?>