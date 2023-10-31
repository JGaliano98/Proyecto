<?php

require_once "../Entities/Usuario.php";

class Registro {

    public static function registraUsuario($usuario, $contraseña,$rol){


        $ID_Usuario=1;

        $objeto = new Usuario($ID_Usuario,$usuario,$contraseña,$rol);

       
        RP_Usuario::InsertaObjeto($objeto);

    }
}

?>