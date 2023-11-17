<?php
$cierraSesion = isset($_POST['cierraSesion']);

$mostrar = RP_Usuario::MostrarTodo();
$i=0;

if($mostrar ==null){
    echo "No hay usuarios";
}else{
    ?>
    <div class="divTablaMostrar">

        <table class="tablaMostrar">
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Rol</th>
            </tr>
            <?php
            
            foreach ($mostrar as $key): 
                
                ?>
                <tr>
                    <td><?php echo $key->getID_usuario(); ?></td>
                    <td name="nombre<?php echo $i ?>"><?php echo $key->getNombre(); ?></td>
                    <td><?php echo $key->getContraseña(); ?></td>
                    <td><?php echo $key->getRol(); ?></td>
                </tr>
            <?php
            $i++;
                endforeach; ?>
        </table>
    </div>
    
    <?php
        

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