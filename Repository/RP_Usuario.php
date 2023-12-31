<?php

     //require_once "../Entities/Usuario.php";
     //require_once "Conexion.php";

     require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';

    class RP_Usuario {


        public static function MostrarTodo(){

            //Abrimos la conexión
            $conexion=Conexion::AbreConexion();

            $resultado= $conexion->query("Select * from usuario");

            while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){


                $ID_Usuario=$tuplas->ID_Usuario;
                $usuario=$tuplas->nombre;
                $contraseña=$tuplas->contraseña;
                $rol=$tuplas->rol;
                $User=new Usuario ($ID_Usuario,$usuario,$contraseña,$rol);
                $array[]=$User;
                
            }
            return $array;

        }


        public static function BuscarPorID($id){

            //Abrimos la conexión
            $conexion=Conexion::AbreConexion();

            $resultado = $conexion->query("Select * from usuario where ID_Usuario=$id");

            while ($tuplas=$resultado->fetch(PDO::FETCH_OBJ)) {

                $ID_Usuario=$tuplas->ID_Usuario;       
                $usuario=$tuplas->nombre;
                $contraseña=$tuplas->contraseña;
                $rol=$tuplas->rol;
                $User=new Usuario($ID_Usuario,$usuario,$contraseña,$rol);
                $array[]=$User;
            
            }
            return $array;

        }

        public static function BuscarPorIDOBJ($id){

            //Abrimos la conexión
            $conexion=Conexion::AbreConexion();

            $resultado = $conexion->query("Select * from usuario where ID_Usuario=$id");

            $User=null;

            while ($tuplas=$resultado->fetch(PDO::FETCH_OBJ)) {

                $ID_Usuario=$tuplas->ID_Usuario;       
                $usuario=$tuplas->nombre;
                $contraseña=$tuplas->contraseña;
                $rol=$tuplas->rol;
                $User=new Usuario($ID_Usuario,$usuario,$contraseña,$rol);
                
            
            }
            return $User;

        }

        public static function BuscaPorUsuario($usuario){

             //Abrimos la conexión
             $conexion=Conexion::AbreConexion();

             $resultado = $conexion->query("Select * from usuario where nombre='$usuario'");
 
             while ($tuplas=$resultado->fetch(PDO::FETCH_OBJ)) {
 
 
                 $ID_Usuario=$tuplas->ID_Usuario;       
                 $usuario=$tuplas->nombre;
                 $contraseña=$tuplas->contraseña;
                 $rol=$tuplas->rol;
                 $User=new Usuario($ID_Usuario,$usuario,$contraseña,$rol);
                 $array[]=$User;

             }
             return $array;

             
        }

        public static function BuscaPorUsuarioOBJ($usuario){

            //Abrimos la conexión
            $conexion=Conexion::AbreConexion();

            $resultado = $conexion->query("Select * from usuario where nombre='$usuario'");
            $User=null;

            while ($tuplas=$resultado->fetch(PDO::FETCH_OBJ)) {


                $ID_Usuario=$tuplas->ID_Usuario;       
                $usuario=$tuplas->nombre;
                $contraseña=$tuplas->contraseña;
                $rol=$tuplas->rol;
                $User=new Usuario($ID_Usuario,$usuario,$contraseña,$rol);

            }
            return $User;

            
       }

        public static function existeUsuario($usuario){


            $resultado = RP_Usuario::BuscaPorUsuarioOBJ($usuario);

            if ($resultado!=null){
                if ($resultado->getNombre() == $usuario){
                    return true;
                } else{
                    return false;
                }
            }else{
                return false;
            }
            
       }

        public static function BorraPorID($id){

            //Abrimos la conexion

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->exec("Delete from usuario where ID_Usuario=$id");

        }

        public static function ActualizaPorID($id,$objeto){

            $conexion = Conexion::AbreConexion();

            //$resultado = $conexion->exec("Update usuario set ID_Usuario=$objeto->ID_usuario, nombre=$objeto->nombre, contraseña=$objeto->contraseña, rol=$objeto->rol where ID_Usuario=$id");

            $resultado = $conexion->exec("UPDATE usuario SET nombre='{$objeto->nombre}', contraseña='{$objeto->contraseña}', rol='{$objeto->rol}' WHERE ID_Usuario={$id}");


        }

        public static function InsertaObjeto($objeto){

            $conexion=Conexion::AbreConexion();

            $id=0;
            $nombre=$objeto->nombre;
            $contraseña=$objeto->contraseña;
            $rol = $objeto ->rol;


            $resultado=$conexion->exec("INSERT INTO usuario (ID_Usuario, nombre,contraseña,rol) VALUES ('$id','$nombre' ,'$contraseña' , null)");

        }

        public static function muestraUsuariosRolNulo(){

            $conexion=Conexion::AbreConexion();

            $resultado = $conexion->query("Select * from usuario where rol is null");

            $array=null;

            
            while ($tuplas=$resultado->fetch(PDO::FETCH_OBJ)) {
 
                


                $ID_Usuario=$tuplas->ID_Usuario;       
                $usuario=$tuplas->nombre;
                $contraseña=$tuplas->contraseña;
                $rol=$tuplas->rol;
                $User=new Usuario($ID_Usuario,$usuario,$contraseña,$rol);
                $array[]=$User;
            
            }
            if ($array==null){
                $array="";
            }
            return $array;


        }


    }

?>
