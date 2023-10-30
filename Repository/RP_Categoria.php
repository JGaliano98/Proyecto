<?php

    require_once "../Entities/Categoria.php";

    class RP_Categoria {

        public static function MostrarTodo(){

            //Abrimos la conexión

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->query("Select * from categoria");

            while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

                $i=0;

                $ID_Categoria=$tuplas->ID_Categoria;
                $nombre=$tuplas->nombre;
                
                $categoria= new Categoria ($ID_Categoria,$nombre);
                $array[$i]=$categoria;

                $i++;
            }

            return $array;
        }


        public static function BuscarPorID($id){

            //Abrimos la conexión

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->query("Select * from categoria where id=$id");

            while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

                $i=0;

                $ID_Categoria=$tuplas->ID_Categoria;
                $nombre=$tuplas->nombre;
                
                $categoria= new Categoria ($ID_Categoria,$nombre);
                $array[$i]=$categoria;

                $i++;
            }

            return $array;
        }


        public static function BorraPorID($id){

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->exec("Delete * from categoria");


        }

        public static function ActualizaPorID($id,$objeto){

            $conexion = Conexion::AbreConexion();

            $resultado=$conexion->exec("Update from categoria set nombre=$objeto->nombre");

        }

        public static function InsertaObjeto ($objeto){

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->exec("INSERT INTO CATEGORIA VALUES ($objeto->id, $objeto->nombre)");

        }

        

        




    }


?>