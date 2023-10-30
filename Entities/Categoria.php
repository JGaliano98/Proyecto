<?php

class Categoria {
    // Atributos
    private $ID_categoria;
    private $nombre;

    // Constructor
    public function __construct($ID_categoria, $nombre) {
        $this->ID_categoria = $ID_categoria;
        $this->nombre = $nombre;
    }

    // Getters
    public function getID_categoria() {
        return $this->ID_categoria;
    }

    public function getNombre() {
        return $this->nombre;
    }

    // Setters
    public function setID_categoria($ID_categoria) {
        $this->ID_categoria = $ID_categoria;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Método toString
    public function __toString() {
        return "ID Categoría: " . $this->ID_categoria . ", Nombre: " . $this->nombre;
    }
}

?>