<?php

    require_once("../Entities/Pregunta.php");

    class RP_Pregunta{

        public static function MostrarTodo(){

            $conexion = Conexion::AbreConexion();

            $resultado=$conexion->query("Select * from pregunta");

            while ($tuplas=$resultado->fetch(PDO::FETCH_OBJ)) {
            
                $id=$tuplas->id;
                $enunciado=$tuplas->enunciado;
                $respuesta1=$tuplas->respuesta1;
                $respuesta2=$tuplas->respuesta2;
                $respuesta3=$tuplas->respuesta3;
                $correcta=$tuplas->correcta;
                $URL=$tuplas->URL;

                $pregunta = new Pregunta($id,$enunciado,$respuesta1,$respuesta2,$respuesta3,$correcta,$URL);
                $array[]=$pregunta;

                
            }
        }


        public static function BuscarPorID($id){

            $conexion = Conexion::AbreConexion();

            $resultado=$conexion->query("Select * from pregunta where ID_Pregunta=$id");

            while ($tuplas=$resultado->fetch(PDO::FETCH_OBJ)) {
                

                $id=$tuplas->id;
                $enunciado=$tuplas->enunciado;
                $respuesta1=$tuplas->respuesta1;
                $respuesta2=$tuplas->respuesta2;
                $respuesta3=$tuplas->respuesta3;
                $correcta=$tuplas->correcta;
                $URL=$tuplas->URL;

                $pregunta = new Pregunta($id,$enunciado,$respuesta1,$respuesta2,$respuesta3,$correcta,$URL);
                $array[]=$pregunta;
                
            }
            return $array;
        }

        public static function BuscarPorIDOBJ($id){

            $conexion = Conexion::AbreConexion();

            $resultado=$conexion->query("Select * from pregunta where ID_Pregunta=$id");

            while ($tuplas=$resultado->fetch(PDO::FETCH_OBJ)) {
                

                $id=$tuplas->id;
                $enunciado=$tuplas->enunciado;
                $respuesta1=$tuplas->respuesta1;
                $respuesta2=$tuplas->respuesta2;
                $respuesta3=$tuplas->respuesta3;
                $correcta=$tuplas->correcta;
                $URL=$tuplas->URL;

                $pregunta = new Pregunta($id,$enunciado,$respuesta1,$respuesta2,$respuesta3,$correcta,$URL);  
            }
            return $pregunta;
        }
        
        public static function BorraPorID($id){

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->exec("Delete * from pregunta where ID_Pregunta=$id");
            

        }

        public static function ActualizaPorID($id, $objeto){

            $conexion = Conexion::AbreConexion();

            $resultado= $conexion->exec("Update from pregunta set ID_Examen=$objeto->ID_Examen, ID_Dificultad=$objeto->ID_Dificultad, ID_Categoria=$objeto->ID_Categoria, Enunciado=$objeto->Enunciado, Respuesta1=$objeto->Respuesta1, Respuesta2=$objeto->Respuesta2, Respuesta3=$objeto->Respuesta3, Correcta=$objeto->Correcta, URL=$objeto->URL");
            
        }

        public static function InsertaObjeto($objeto){

            $conexion = Conexion::AbreConexion();

            $resultado = $conexion->exec("INSERT INTO PREGUNTA VALUES ($objeto->ID_Pregunta, $objeto->ID_Examen, $objeto->ID_Dificultad, $objeto->ID_Categoria, '$objeto->Enunciado', '$objeto->Respuesta1', '$objeto->Respuesta2', '$objeto->Respuesta3', $objeto->Correcta, '$objeto->URL')");

        }

    }

?>