<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::autoload();

class funcionesRegistro {

    public static function registraUsuario($usuario, $contraseña,$rol){


        $ID_Usuario=1;

        $objeto = new Usuario($ID_Usuario,$usuario,$contraseña,$rol);

       
        RP_Usuario::InsertaObjeto($objeto);

    }
}

?>