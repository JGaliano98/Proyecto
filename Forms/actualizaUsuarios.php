<?php

$mostrar = RP_Usuario::MostrarTodo();
$i = 0;

if ($mostrar == null) {
    echo "No hay usuarios";
} else {
    ?>
    <div id="divTablaMostrar">
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
                            <input type="submit" name="btnEditar<?php echo $i ?>" id="botonEditar" value="Editar">
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
    if (isset($_POST['btnEditar' . $j])) {
        RP_Usuario::ActualizaPorID($mostrar[$j]->getID_usuario(), $nuevoObjeto);

        echo '<script>window.location.href="?menu=borraUsuarios";</script>';
    }
}
?>
<style>
    #enlace {
        display: none;
    }
</style>