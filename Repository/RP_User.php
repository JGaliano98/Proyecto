<?php

    require_once "../Entities/User.php";

    class RP_User {


        public static function MostrarTodo(){

            //Abrimos la conexión
            $conexion=Conexion::AbreConexion();

            $resultado= $conexion->query("Select * from usuario");

            while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

                $i=0;

                $id=$tuplas->id;
                $usuario=$tuplas->nombre;
                $contraseña=$tuplas->contraseña;
                $rol=$tuplas->rol;
                $User=new USER($id,$usuario,$contraseña,$rol);
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


                $id=$tuplas->id;
                $usuario=$tuplas->nombre;
                $contraseña=$tuplas->contraseña;
                $rol=$tuplas->rol;
                $User=new USER($id,$usuario,$contraseña,$rol);
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

            $resultado=$conexion->exec("INSERT INTO USUARIO VALUES ($objeto->id, $objeto->nombre, $objeto->contraseña, $objeto->rol)");


        }

    }

?>
