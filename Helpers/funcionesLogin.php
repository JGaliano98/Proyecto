<?php

require_once "../Repository/RP_Usuario.php";

    class Login {

        public static function existeUsuario($usuario, $contraseña){
            // Obtiene los datos de la base de datos
            $datos = RP_Usuario::MostrarTodo();
        
            // Inicializa una variable para indicar si el usuario y la contraseña coinciden
            $existe = false;
        
            // Obtiene el número total de datos en la base de datos
            $numDatos = count($datos);
        
            for ($i = 0; $i < $numDatos; $i++) { 
                // Verifica si el nombre de usuario y la contraseña coinciden con los datos en la posición actual
                if ($datos[$i]['nombre'] == $usuario && $datos[$i]['contraseña'] == $contraseña) {
                    // Si hay coincidencia, cambia la variable a verdadero y sale del bucle
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