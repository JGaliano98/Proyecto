<?php

    require_once "../Entities/Intento.php";

    class RP_Intento{

        public static function MostrarTodo(){

            //Abrimos la conexión
            $conexion=Conexion::AbreConexion();

            $resultado= $conexion->query("Select * from intento");

            while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

                $i=0;

                $id=$tuplas->id;
                $fecha=$tuplas->fecha;
                $JSON=$tuplas->JSON;

                $intento=new Intento($id,$fecha,$JSON);
                $array[$i]=$intento;
                $i++;
            }

            return $array;

        }


        public static function BuscarPorID($id){

            //Abrimos la conexión
            $conexion=Conexion::AbreConexion();

            $resultado= $conexion->query("Select * from intento where id=$id");

            while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

                $i=0;

                $id=$tuplas->id;
                $fecha=$tuplas->fecha;
                $JSON=$tuplas->JSON;

                $intento=new Intento($id,$fecha,$JSON);
                $array[$i]=$intento;
                $i++;
            }

            return $array;

        }

        public static function BorraPorID($id){

            //Abrimos la conexion

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->exec("Delete from intento where id=$id");

        }

        public static function ActualizaPorID($id,$objeto){

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->exec("Update from intento set fecha=$objeto->fecha, JSON=$objeto->JSON where id=$id");

        }

        public static function InsertaObjeto($objeto){

            $conexion=Conexion::AbreConexion();

            $resultado=$conexion->exec("INSERT INTO INTENTO VALUES ($objeto->id, $objeto->fecha, $objeto->JSON)");


        }


    }

?>