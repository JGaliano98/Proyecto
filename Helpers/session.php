<?php

class SESSION{

    public static function iniciarSesion($clave, $usuario){

        session_start();

        $_SESSION[$clave]=$usuario;

    }

    public static function cerrarSesion(){

        session_destroy();

        header("Location: ../Forms/login.php");

    }

    public static function leerValorSesion($clave){

        $usuario = $_SESSION[$clave];

        return $usuario;

    }



}


?>