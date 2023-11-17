<?php
$cierraSesion = isset($_POST['cierraSesion']);

$mostrar = RP_Usuario::MostrarTodo();
$i = 0;

if ($mostrar == null) {
    echo "No hay usuarios";
} else {
    ?>
    <div id="divTablaActualizar">
        <form method="post">
            <table class="tablaMostrar">
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Rol</th>
                    <th>Editar</th>
                </tr>
                <?php
                $nuevoObjeto = array(); // Inicializa el array antes del bucle

                foreach ($mostrar as $key):
                ?>
                    <tr>
                        <td><input type="text" id="inputActualizar" name="ID_Usuario[]" value="<?php echo $key->getID_usuario(); ?>"></td>
                        <td><input type="text" id="inputActualizar" name="nombre[]" value="<?php echo $key->getNombre(); ?>"></td>
                        <td><input type="text" id="inputActualizar" name="contraseña[]" value="<?php echo $key->getContraseña(); ?>"></td>
                        <td><input type="text" id="inputActualizar" name="rol[]" value="<?php echo $key->getRol(); ?>"></td>
                        <td>
                            <input type="submit" id="btnEditar" name="btnEditar<?php echo $i ?>" value="Editar">
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
        if (isset($_POST['btnEditar'. $j])) {
            $IDs = $_POST['ID_Usuario'];
            $nombres = $_POST['nombre'];
            $contraseñas = $_POST['contraseña'];
            $roles = $_POST['rol'];
    
            //Si todo es correcto, añade los datos y crea el objeto
            if (isset($IDs[$j], $nombres[$j], $contraseñas[$j], $roles[$j])) {
                $ID = $IDs[$j];
                $nombre = $nombres[$j];
                $contraseña = $contraseñas[$j];
                $rol = $roles[$j];
    
                $nuevoObjeto[$j] = new Usuario($ID, $nombre, $contraseña, $rol);
                
                // Actualiza el usuario por ID
                RP_Usuario::ActualizaPorID($mostrar[$j]->getID_usuario(), $nuevoObjeto[$j]);
    
                echo '<script>window.location.href="?menu=actualizaUsuarios";</script>';
            }
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