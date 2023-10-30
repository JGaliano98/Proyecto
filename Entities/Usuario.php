<?php

class Usuario {
    // Atributos
    private $ID_usuario;
    private $nombre;
    private $contraseña;
    private $rol;

    // Constructor
    public function __construct($ID_usuario, $nombre, $contraseña, $rol) {
        $this->ID_usuario = $ID_usuario;
        $this->nombre = $nombre;
        $this->contraseña = $contraseña;
        $this->rol = $rol;
    }

    // Getters
    public function getID_usuario() {
        return $this->ID_usuario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getContraseña() {
        return $this->contraseña;
    }

    public function getRol() {
        return $this->rol;
    }

    // Setters
    public function setID_usuario($ID_usuario) {
        $this->ID_usuario = $ID_usuario;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }

    // Método toString
    public function __toString() {
        return "ID Usuario: " . $this->ID_usuario . ", Nombre: " . $this->nombre . ", Contraseña: " . $this->contraseña . ", Rol: " . $this->rol;
    }
}

?>