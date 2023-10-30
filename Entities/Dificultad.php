<?php

class Dificultad {
    // Atributos
    private $ID_dificultad;
    private $nombre;

    // Constructor
    public function __construct($ID_dificultad, $nombre) {
        $this->ID_dificultad = $ID_dificultad;
        $this->nombre = $nombre;
    }

    // Getters
    public function getID_dificultad() {
        return $this->ID_dificultad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    // Setters
    public function setID_dificultad($ID_dificultad) {
        $this->ID_dificultad = $ID_dificultad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Método toString
    public function __toString() {
        return "ID Dificultad: " . $this->ID_dificultad . ", Nombre: " . $this->nombre;
    }
}

?>