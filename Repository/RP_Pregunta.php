<?php

    require_once("../Entities/Pregunta.php");

    class RP_Pregunta{

        public static function MostrarTodo(){

            $conexion = Conexion::AbreConexion();

            $resultado=$conexion->query("Select * from pregunta");

            while ($tuplas=$resultado->fetch(PDO::FETCH_OBJ)) {
                
                $i=0;

                $id=$tuplas->id;
                $enunciado=$tuplas->enunciado;
                $respuesta1=$tuplas->respuesta1;
                $respuesta2=$tuplas->respuesta2;
                $respuesta3=$tuplas->respuesta3;
                $correcta=$tuplas->correcta;
                $URL=$tuplas->URL;

                $pregunta = new Pregunta($id,$enunciado,$respuesta1,$respuesta2,$respuesta3,$correcta,$URL);
                $array[$i]=$pregunta;
                
                $i++;

                
            }
        }


        public static function BuscarPorID($id){

            $conexion = Conexion::AbreConexion();

            $resultado=$conexion->query("Select * from pregunta where id=$id");

            while ($tuplas=$resultado->fetch(PDO::FETCH_OBJ)) {
                
                $i=0;

                $id=$tuplas->id;
                $enunciado=$tuplas->enunciado;
                $respuesta1=$tuplas->respuesta1;
                $respuesta2=$tuplas->respuesta2;
                $respuesta3=$tuplas->respuesta3;
                $correcta=$tuplas->correcta;
                $URL=$tuplas->URL;

                $pregunta = new Pregunta($id,$enunciado,$respuesta1,$respuesta2,$respuesta3,$correcta,$URL);
                $array[$i]=$pregunta;
                $i++;
                
            }
        }
        
        public static function BorraPorID($id){

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->exec("Delete * from pregunta where id=$id");
            

        }

        public static function ActualizaPorID($id, $objeto){

            $conexion = Conexion::AbreConexion();

            $resultado= $conexion->exec("Update from pregunta set enunciado=$objeto->enunciado, respuesta1=$objeto->respuesta1, respuesta2=$objeto->respuesta2, respuesta3=$objeto->respuesta3, correcta=$objeto->correcta, URL=$objeto->URL");
            
        }

        public static function InsertarObjeto($objeto){

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->exec("INSERT INTO PREGUNTA VALUES ($objeto->id, $objeto->enunciado, $objeto->respuesta1, $objeto->respuesta2, $objeto->respuesta3, $objeto->correcta, $objeto->URL");

        }

    }


?>