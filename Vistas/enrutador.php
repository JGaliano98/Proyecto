<?php
if (isset($_GET['menu'])) {
    $rutaBase = $_SERVER['DOCUMENT_ROOT'].'/Proyecto/';

    if ($_GET['menu'] == "login") {
        require_once $rutaBase . '/Forms/login.php';
    }
    if ($_GET['menu'] == "registro") {
        require_once $rutaBase . '/Forms/registro.php';
    }
    if ($_GET['menu'] == "olvidaContraseña") {
        require_once $rutaBase . '/Forms/olvidadoContraseña.php';
        
    }
    if ($_GET['menu'] == "administrador") {
        require_once $rutaBase . '/Forms/administrador.php';
        
    }
    if ($_GET['menu'] == "alumno") {
        require_once $rutaBase . '/Forms/alumno.php';
        
    }
    if ($_GET['menu'] == "profesor") {
        require_once $rutaBase . '/Forms/profesor.php';
        
    }
    if ($_GET['menu'] == "muestraExamen") {
        require_once $rutaBase . '/Forms/muestraExamen.php';
        
    }
    if ($_GET['menu'] == "muestraExamenCompleto") {
        require_once $rutaBase . '/Forms/muestraExamenCompleto.php';
        
    }
    if ($_GET['menu'] == "muestraUsuarios") {
        require_once $rutaBase . '/Forms/muestraUsuarios.php';
        
    }
    if ($_GET['menu'] == "borraUsuarios") {
        require_once $rutaBase . '/Forms/borraUsuarios.php';
        
    }
    if ($_GET['menu'] == "actualizaUsuarios") {
        require_once $rutaBase . '/Forms/actualizaUsuarios.php';
        
    }
    if ($_GET['menu'] == "validaUsuarios") {
        require_once $rutaBase . '/Forms/validaUsuarios.php';
        
    }
}