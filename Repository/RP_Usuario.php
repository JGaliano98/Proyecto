<?php

    require_once "../Entities/Usuario.php";
    require_once "Conexion.php";

    class RP_Usuario {


        public static function MostrarTodo(){

            //Abrimos la conexión
            $conexion=Conexion::AbreConexion();

            $resultado= $conexion->query("Select * from usuario");

            while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

                $i=0;

                $ID_Usuario=$tuplas->ID_Usuario;
                $usuario=$tuplas->nombre;
                $contraseña=$tuplas->contraseña;
                $rol=$tuplas->rol;
                $User=new Usuario ($ID_Usuario,$usuario,$contraseña,$rol);
                $array[$i]=$User;
                $i++;
            }
            return $array;

        }


        public static function BuscarPorID($id){

            //Abrimos la conexión
            $conexion=Conexion::AbreConexion();

            $resultado = $conexion->query("Select * from usuario where id=$id");

            while ($tuplas=$resultado->fetch(PDO::FETCH_OBJ)) {

                $i=0;


                $ID_Usuario=$tuplas->ID_Usuario;       
                $usuario=$tuplas->nombre;
                $contraseña=$tuplas->contraseña;
                $rol=$tuplas->rol;
                $User=new Usuario($ID_Usuario,$usuario,$contraseña,$rol);
                $array[$i]=$User;
                $i++;
            }
            return $array;

        }

        public static function BorraPorID($id){

            //Abrimos la conexion

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->exec("Delete from usuario where id=$id");

        }

        public static function ActualizaPorID($id,$objeto){

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->exec("Update from usuario set nombre=$objeto->nombre, contraseña=$objeto->contraseña, rol=$objeto->rol where id=$id");



        }

        public static function InsertaObjeto($objeto){

            $conexion=Conexion::AbreConexion();

            $nombre=$objeto->getNombre();
            $contraseña=$objeto->getContraseña();


            $resultado=$conexion->exec("INSERT INTO usuario (nombre,contaseña,rol) VALUES ('$nombre' ,'$contraseña' , null)");

        }

    }

?>
