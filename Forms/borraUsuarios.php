<?php
$cierraSesion = isset($_POST['cierraSesion']);

$mostrar = RP_Usuario::MostrarTodo();
$i = 0;

if ($mostrar == null) {
    echo "No hay usuarios";
} else {
    ?>
    <div id="divTablaBorrar">
        <table class="tablaMostrar">
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Rol</th>
                <th>Eliminar</th>
            </tr>
            <?php
            foreach ($mostrar as $key):
            ?>
                <tr>
                    <td name="ID_Usuario<?php echo $i ?>"><?php echo $key->getID_usuario(); ?></td>
                    <td name="nombre<?php echo $i ?>"><?php echo $key->getNombre(); ?></td>
                    <td name="contraseña<?php echo $i ?>"><?php echo $key->getContraseña(); ?></td>
                    <td name="rol<?php echo $i ?>"><?php echo $key->getRol(); ?></td>
                    <td>
                        <form method="post">
                            <input type="submit" id="btnBorrar" name="btnBorrar<?php echo $i ?>" id="botonBorrar" value="Borrar">
                        </form>
                    </td>
                </tr>
                <?php
                $i++;
            endforeach;
            ?>
        </table>
    </div>
    <?php
}

for ($j = 0; $j < $i; $j++) {
    if (isset($_POST['btnBorrar' . $j])) {
        RP_Usuario::BorraPorID($mostrar[$j]->getID_usuario());

        echo '<script>window.location.href="?menu=borraUsuarios";</script>';
    }
}
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
    #enlace {
        display: none;
    }
</style>