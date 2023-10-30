<?php

class Intento {
    // Atributos
    private $ID_intento;
    private $fecha;
    private $JSON;

    // Constructor
    public function __construct($ID_intento, $fecha, $JSON) {
        $this->ID_intento = $ID_intento;
        $this->fecha = $fecha;
        $this->JSON = $JSON;
    }

    // Getters
    public function getID_intento() {
        return $this->ID_intento;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getJSON() {
        return $this->JSON;
    }

    // Setters
    public function setID_intento($ID_intento) {
        $this->ID_intento = $ID_intento;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setJSON($JSON) {
        $this->JSON = $JSON;
    }

    // Método toString
    public function __toString() {
        return "ID Intento: " . $this->ID_intento . ", Fecha: " . $this->fecha . ", JSON: " . $this->JSON;
    }
}


?>