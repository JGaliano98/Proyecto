<?php

class Examen {
    // Atributos
    private $ID_examen;
    private $fecha;

    // Constructor
    public function __construct($ID_examen, $fecha) {
        $this->ID_examen = $ID_examen;
        $this->fecha = $fecha;
    }

    // Getters
    public function getID_examen() {
        return $this->ID_examen;
    }

    public function getFecha() {
        return $this->fecha;
    }

    // Setters
    public function setID_examen($ID_examen) {
        $this->ID_examen = $ID_examen;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    // Método toString
    public function __toString() {
        return "ID Examen: " . $this->ID_examen . ", Fecha: " . $this->fecha;
    }
}


?>