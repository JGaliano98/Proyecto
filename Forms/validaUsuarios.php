<?php

$mostrar = funcionesAdministrador::validaUsuario();
$i=0;

if($mostrar ==null){
    echo "No hay usuarios pendientes de validar";
}else{

    ?>

    <div id="divTablaValidar">
        <table class="tablaValidar">
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
                    <td name="nombre<?php echo $i ?>"><?php echo $key->getNombre(); ?></td>
                    <td><?php echo $key->getContraseña(); ?></td>
                    <td><form method="POST">
                        <select name="rol_usuario<?php echo $i ?>">
                            <option value="null" <?php if($key->getRol() == '') echo 'selected'; ?>>null</option>
                            <option value="Alumno" <?php if($key->getRol() == 'Alumno') echo 'selected'; ?>>Alumno</option>
                            <option value="Profesor" <?php if($key->getRol() == 'Profesor') echo 'selected';?>>Profesor</option>
                        </select></form>
                    </td>
                    <td><form method="POST">
                        <input type="submit" name="btnSi<?php echo $i ?>" value="Si">
                        <input type="submit" name="btnNo<?php echo $i ?>" value="No">
                    </form></td>
                </tr>
            <?php
            $i++;
                endforeach; ?>
        </table>
    </div>
    
    <?php
        

}


    for($j=0; $j<$i; $j++){
        if(isset($_POST['btnSi'.$j])) {
    
            $objetoNuevo = new Usuario("27", "Pepito", "1234", "Profesor");

            RP_Usuario::ActualizaPorID($objetoNuevo->getID_usuario(), $objetoNuevo);

        }

    }
    
    // if(isset($_POST['btnSi0'])) {

    //     echo $mostrar[0]->getNombre();
    
    // }





    
//  $objetoNuevo = new Usuario("27", "Pepito", "1234", "Profesor");

//  RP_Usuario::ActualizaPorID($objetoNuevo->getID_usuario(), $objetoNuevo);



?>

<style>
    #enlace{
        display: none;
    }
   
</style>