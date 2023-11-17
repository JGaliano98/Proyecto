<?php
$cierraSesion = isset($_POST['cierraSesion']);
$mostrar = RP_Usuario::muestraUsuariosRolNulo();
$i = 0;

if ($mostrar == null) {
    ?>
    <script>alert("¡Lo sentimos! No hay usuarios para validar.");</script>
    <?php
    
} else {
    ?>
    <div id="divTablaValidar">
        <form method="post">
            <table class="tablaMostrar">
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Rol</th>
                    <th>Validar</th>
                </tr>
                <?php
                foreach ($mostrar as $key):
                ?>
                    <tr>
                        <td><?php echo $key->getID_usuario(); ?></td>
                        <td><?php echo $key->getNombre(); ?></td>
                        <td><?php echo $key->getContraseña(); ?></td>
                        <td>
                            <select name="rol[]">
                                <option value="nulo" <?php echo ($key->getRol() == 'nulo') ? 'selected' : ''; ?>>Nulo</option>
                                <option value="Alumno" <?php echo ($key->getRol() == 'Alumno') ? 'selected' : ''; ?>>Alumno</option>
                                <option value="Profesor" <?php echo ($key->getRol() == 'Profesor') ? 'selected' : ''; ?>>Profesor</option>
                            </select>
                            <input type="hidden" name="ID_Usuario[]" value="<?php echo $key->getID_usuario(); ?>">
                            <input type="hidden" name="nombre[]" value="<?php echo $key->getNombre(); ?>">
                            <input type="hidden" name="contraseña[]" value="<?php echo $key->getContraseña(); ?>">
                        </td>
                        <td>
                            <input id="btnValidar" type="submit" name="btnEditar<?php echo $i ?>" value="Validar">
                        </td>
                    </tr>
                    <?php
                    $i++;
                endforeach;
                ?>
            </table>
        </form>
    </div>
    

    <?php
}

// Verifica si se ha enviado el formulario antes de procesar los datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($j = 0; $j < $i; $j++) {
        if (isset($_POST['btnEditar'. $j], $_POST['ID_Usuario'][$j], $_POST['nombre'][$j], $_POST['contraseña'][$j], $_POST['rol'][$j])) {
            $ID = $_POST['ID_Usuario'][$j];
            $nombre = $_POST['nombre'][$j];
            $contraseña = $_POST['contraseña'][$j];
            $rol = $_POST['rol'][$j];

            // Si todo es correcto, crea el objeto a actualizar
            $nuevoObjeto = new Usuario($ID, $nombre, $contraseña, $rol);

            // Actualiza el usuario por ID
            RP_Usuario::ActualizaPorID($ID, $nuevoObjeto);

            echo '<script>window.location.href="?menu=validaUsuarios";</script>';
        }
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