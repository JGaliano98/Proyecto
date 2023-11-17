<?php
//SELECT
require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::Autoload();

// Para mostrar
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['ID_Pregunta']; // Obtenemos el ID de la pregunta
    $pregunta = RP_Pregunta::BuscarPorIDOBJ($id);
    
    if ($pregunta) {
        $preguntaApi = new stdClass();
        $preguntaApi->ID_Pregunta = $id;
        $preguntaApi->ID_Examen = $pregunta->getID_Examen();
        $preguntaApi->ID_Dificultad = $pregunta->getID_Dificultad();
        $preguntaApi->ID_Categoria = $pregunta->getID_Categoria();
        $preguntaApi->Enunciado = $pregunta->getEnunciado();
        $preguntaApi->Respuesta1 = $pregunta->getRespuesta1();
        $preguntaApi->Respuesta2 = $pregunta->getRespuesta2();
        $preguntaApi->Respuesta3 = $pregunta->getRespuesta3();
        $preguntaApi->Correcta = $pregunta->getCorrecta();
        $preguntaApi->URL = $pregunta->getURL();

        echo json_encode($preguntaApi);
    } 
}

// Para actualizar
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $cuerpo = file_get_contents("php://input");
    $id = $_GET["ID_Pregunta"];

    $pregunta = json_decode($cuerpo);

    $preguntaApi = new stdClass();
    $preguntaApi->ID_Pregunta = $id;
    $preguntaApi->ID_Examen = $pregunta->ID_Examen;
    $preguntaApi->ID_Dificultad = $pregunta->ID_Dificultad;
    $preguntaApi->ID_Categoria = $pregunta->ID_Categoria;
    $preguntaApi->Enunciado = $pregunta->Enunciado;
    $preguntaApi->Respuesta1 = $pregunta->Respuesta1;
    $preguntaApi->Respuesta2 = $pregunta->Respuesta2;
    $preguntaApi->Respuesta3 = $pregunta->Respuesta3;
    $preguntaApi->Correcta = $pregunta->Correcta;
    $preguntaApi->URL = $pregunta->URL;
    
    RP_Pregunta::ActualizaPorID($id, $preguntaApi);
}

// Para borrar
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    $id = $_GET["ID_Pregunta"];
    RP_Pregunta::BorraPorID($id);
    echo "Pregunta borrada con éxito";
}

// Para añadir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $objeto = file_get_contents("php://input");
    $pregunta = json_decode($objeto);
    $preguntaApi = new stdClass();
    $preguntaApi->ID_Pregunta = $pregunta->ID_Pregunta;
    $preguntaApi->ID_Examen = $pregunta->ID_Examen;
    $preguntaApi->ID_Dificultad = $pregunta->ID_Dificultad;
    $preguntaApi->ID_Categoria = $pregunta->ID_Categoria;
    $preguntaApi->Enunciado = $pregunta->Enunciado;
    $preguntaApi->Respuesta1 = $pregunta->Respuesta1;
    $preguntaApi->Respuesta2 = $pregunta->Respuesta2;
    $preguntaApi->Respuesta3 = $pregunta->Respuesta3;
    $preguntaApi->Correcta = $pregunta->Correcta;
    $preguntaApi->URL = $pregunta->URL;

    RP_Pregunta::InsertaObjeto($preguntaApi);
}
?>