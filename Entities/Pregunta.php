<?php

class Pregunta {
    // Atributos
    private $ID_pregunta;
    private $enunciado;
    private $pregunta1;
    private $pregunta2;
    private $pregunta3;
    private $correcta;
    private $URL;

    // Constructor
    public function __construct($ID_pregunta, $enunciado, $pregunta1, $pregunta2, $pregunta3, $correcta, $URL) {
        $this->ID_pregunta = $ID_pregunta;
        $this->enunciado = $enunciado;
        $this->pregunta1 = $pregunta1;
        $this->pregunta2 = $pregunta2;
        $this->pregunta3 = $pregunta3;
        $this->correcta = $correcta;
        $this->URL = $URL;
    }

    // Getters
    public function getID_pregunta() {
        return $this->ID_pregunta;
    }

    public function getEnunciado() {
        return $this->enunciado;
    }

    public function getPregunta1() {
        return $this->pregunta1;
    }

    public function getPregunta2() {
        return $this->pregunta2;
    }

    public function getPregunta3() {
        return $this->pregunta3;
    }

    public function getCorrecta() {
        return $this->correcta;
    }

    public function getURL() {
        return $this->URL;
    }

    // Setters
    public function setID_pregunta($ID_pregunta) {
        $this->ID_pregunta = $ID_pregunta;
    }

    public function setEnunciado($enunciado) {
        $this->enunciado = $enunciado;
    }

    public function setPregunta1($pregunta1) {
        $this->pregunta1 = $pregunta1;
    }

    public function setPregunta2($pregunta2) {
        $this->pregunta2 = $pregunta2;
    }

    public function setPregunta3($pregunta3) {
        $this->pregunta3 = $pregunta3;
    }

    public function setCorrecta($correcta) {
        $this->correcta = $correcta;
    }

    public function setURL($URL) {
        $this->URL = $URL;
    }

    // Método toString
    public function __toString() {
        return "ID Pregunta: " . $this->ID_pregunta . ", Enunciado: " . $this->enunciado . ", Pregunta1: " . $this->pregunta1 . ", Pregunta2: " . $this->pregunta2 . ", Pregunta3: " . $this->pregunta3 . ", Correcta: " . $this->correcta . ", URL: " . $this->URL;
    }
}

?>