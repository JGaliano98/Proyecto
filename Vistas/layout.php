<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autoescuela Fuentezuelas</title>
    <link rel="stylesheet" href="Styles/estilos.css">
    <script src="./JS/examen.js"></script>
</head>

<body id = "fondo">

    
    <div class="fondoInicio">
        <?php
            require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Vistas/header.php';
            ?>


        <div id="cuerpo">
            <?php
                require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Vistas/enrutador.php';
            ?>
        </div>

        <div class="btnAccesoLogin">
            <a id="enlace" href="?menu=login"><input type="button" class="btnAcceder" id="btnAcceso" value="Acceso Login"></a>
        </div>
        <div class="divFooter">
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Vistas/footer.php';
            ?>
        </div>

    </div>
        
   



</body>

</html>

