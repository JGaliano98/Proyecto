<?php

$mostrar = RP_Usuario::MostrarTodo();
$i=0;

if($mostrar ==null){
    echo "No hay usuarios";
}else{



    ?>

    <div id="divTablaMostrar">
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

?>

<style>
    #enlace {
        display: none;
    }
</style>