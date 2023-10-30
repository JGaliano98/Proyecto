<?php
    require_once "../Entities/Dificultad.php";

    class RP_Dificultad {

        public static function MostrarTodo(){

            //Abrimos la conexión

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->query("Select * from dificultad");

            while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

                $i=0;

                $ID_Dificultad=$tuplas->ID_Dificultad;
                $nombre=$tuplas->nombre;
                
                $dificultad= new Dificultad($ID_Dificultad,$nombre);
                $array[$i]=$dificultad;

                $i++;
            }

            return $array;

        }

        public static function BuscarPorID($id){

            //abrimos la conexión

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->query("Select * from dificultad where id=$id");

            while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

                $i=0;

                $ID_Dificultad=$tuplas->ID_Dificultad;
                $nombre=$tuplas->nombre;
                
                $dificultad= new Dificultad($ID_Dificultad,$nombre);
                $array[$i]=$dificultad;

                $i++;
            }

            return $array;

        }

        public static function BorraPorID($id){

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->exec("Delete * from dificultad");

        }

        public static function ActualizaPorID($id,$objeto){

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->exec("Update from dificultad set nombre=$objeto->nombre");
        }

        public static function InsertaObjeto($objeto){

            $conexion = Conexion::AbreConexion();

            $resultado=$conexion->exec("INSERT INTO DIFICULTAD VALUES ($objeto->id, $objeto->nombre");
            
            
        }

    }


?>