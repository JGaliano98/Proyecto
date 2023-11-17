<header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="?menu=login">
            <img src="Styles/imagenes/logo.jpg">
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
                require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';

                Autoload::autoload();
                session::iniciarSesion();

                if(funcionesLogin::estaLogueado('usuario'))
                {
                    $usuario =session::leerSesion('usuario');

                    foreach($usuario as $dato){
                        $rol = $dato->getRol();
                        if($rol == "Alumno")
                        {
                            ?>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="?menu=muestraExamen">Muestra Examen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="?menu=genera_examen">Genera examen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="?menu=realiza_examen">Realizar examen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="?menu=ver_examenes_realizados">Ver exámenes realizados</a>
                                    </li>
                                    <li class="nav-item">
                                            <a class="nav-link" href="?menu=generar_test_aleatorio"></a>
                                    </li>
                                
                                </ul>
                                    
                                <div id="navegador">
                                    <form class="form-inline my-2 my-lg-0">
                                        <input id="barraBuscar" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                                        <button id="btnBuscar" class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                    </form>
                                </div>


                            
                            </div>
                            <?php
                        }

                        if($rol == "Profesor")
                        {
                            ?>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="?menu=muestraExamen">Mostrar examen <span class="sr-only"></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="?menu=muestraExamenCompleto">Examen Completo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="?menu=realiza_examen">Realizar examen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="?menu=ver_examenes_realizados">Ver exámenes realizados</a>
                                    </li>
                                    <li class="nav-item">
                                            <a class="nav-link" href="?menu=generar_test_aleatorio">Modificar</a>
                                    </li>
                                
                                </ul>
                                    
                                <div id="navegador">
                                    <form class="form-inline my-2 my-lg-0">
                                        <input id="barraBuscar" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                                        <button id="btnBuscar" class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                    </form>
                                </div>


                            
                            </div>
                            <?php
                        }

                        if($rol == "Administrador")
                        {
                            ?>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="?menu=validaUsuarios">Validar Nuevos Usuarios <span class="sr-only"></span></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="?menu=muestraUsuarios">Mostrar Usuarios<span class="sr-only"></span></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="?menu=borraUsuarios">Borrar Usuarios<span class="sr-only"></span></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="?menu=actualizaUsuarios">Actualizar Usuarios<span class="sr-only"></span></a>
                                    </li>
                                
                                
                                </ul>
                                    
                                <div id="navegador">
                                    <form class="form-inline my-2 my-lg-0">
                                        <input id="barraBuscar" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                                        <button id="btnBuscar" class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                    </form>
                                </div>


                            
                            </div>
                            <?php
                        }



                    }
                }

?>
        </nav>
    </header>