<?php

require_once "../Repository/RP_Usuario.php";

    class Login {

        public static function existeUsuario($usuario, $contraseña){
            // Obtiene los datos de la base de datos
            $datos = RP_Usuario::MostrarTodo();
            
            // Inicializa una variable para indicar si el usuario y la contraseña coinciden
            $existe = false;
            
            // Itera sobre los objetos en el array de datos
            foreach ($datos as $dato) {
                // Asegúrate de que los nombres de los métodos coincidan con los nombres de los métodos de la clase Usuario
                if ($dato->getNombre() == $usuario && $dato->getContraseña() == $contraseña) {
                    // Si hay coincidencia, cambia la variable a verdadero y termina el bucle
                    $existe = true;
                    break;
                }
            }
            
            // Devuelve true si se encuentra una coincidencia, de lo contrario, devuelve false
            return $existe;
        }
        
        
        
        
        

        //FALTA IDENTIFICA Y USUARIOLOGUEADO

    }


?>