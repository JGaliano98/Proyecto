<?php
$cierraSesion = isset($_POST['cierraSesion']);
?>

<div id="examen">

</div>

<?php
if ($cierraSesion) {
    funcionesLogin::logOut("?menu=login");
}
?>
<form method="post">
<div id="cierraSesion">
    <input type="submit" id="btnCierraSesion" value="Cerrar Sesión" name="cierraSesion">
</div>
</form>


<style>
    #enlace{
        display: none;
    }
</style>