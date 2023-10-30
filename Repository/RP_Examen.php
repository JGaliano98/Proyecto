<?php

    require_once "../Entities/Examen.php";

    class RP_Examen {

        public static function MostrarTodo(){

            //Abrimos la conexión

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->query("Select * from examen");

            while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

                $i=0;

                $ID_Examen=$tuplas->ID_Examen;
                $fecha=$tuplas->fecha;
                
                $examen= new Examen ($ID_Examen,$fecha);
                $array[$i]=$examen;

                $i++;
            }

            return $array;
        }


        public static function BuscarPorID($id){

            //Abrimos la conexión

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->query("Select * from examen where id=$id");

            while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

                $i=0;

                $ID_Examen=$tuplas->ID_Examen;
                $fecha=$tuplas->fecha;
                
                $examen= new Examen ($ID_Examen,$fecha);
                $array[$i]=$examen;

                $i++;
            }

            return $array;
        }


        public static function BorraPorID($id){

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->exec("Delete * from examen");


        }

        public static function ActualizaPorID($id,$objeto){

            $conexion = Conexion::AbreConexion();

            $resultado=$conexion->exec("Update from examen set fecha=$objeto->fecha");

        }

        public static function InsertaObjeto ($objeto){

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->exec("INSERT INTO EXAMEN VALUES ($objeto->id, $objeto->fecha)");

        }

        

        




    }


?>