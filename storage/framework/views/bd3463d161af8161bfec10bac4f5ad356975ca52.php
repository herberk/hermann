<nav class="navbar navbar-expand-md navbar-light navbar-laravel fixed-top" id="mainNav">

    <a href="<?php echo e(url('/')); ?>">
    <img  src="/storage/images/hb.png" width="23" height="23" />
    </a>
    <a id="profit" class="navbar-brand" href="<?php echo e(url('/home')); ?>">
       <strong>&nbsp;
       <?php echo e(setting('company' )); ?>

        <?php echo e(setting( 'ano')); ?>

       </strong>
       </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item <?php echo e(! Route::is('home')?:'active'); ?>">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>"><i class="fas fa-desktop" style=color:Tomato></i><strong>  Escritorio</strong></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-fw fa-table" style=color:#3729fa></i> <strong> Tablas</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(url('/locaciones')); ?>">Regiones Comunas Ciudades</a>
                        <a class="dropdown-item" href="<?php echo e(url('/giros')); ?>">Giros o Actividades SII</a>
                        <a class="dropdown-item" href="<?php echo e(url('/Tipo_atributo')); ?>">Tipos y descripcion</a>
                        <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="<?php echo e(url('atributo/Exports')); ?>"><i class="far fa-file-excel"></i> Listado Atributos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-building" style=color:#e4c40a></i>
                        <strong> Empresas</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(url('empresa/index')); ?>"><i class="far fa-list-alt"></i> Lista Empresas</a>
                        <a class="dropdown-item" href="<?php echo e(url('empresa/papelera')); ?>">Papelera Empresa</a>
                        <a class="dropdown-item" href="<?php echo e(url('creatempresa')); ?>">Nueva Empresa</a>
                         <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo e(url('/contactos')); ?>"><i class="far fa-list-alt"></i> Lista de Contactos</a>
                        <a class="dropdown-item" href="<?php echo e(url('listasocios')); ?>"><i class="far fa-list-alt"></i> Lista de Socios</a>
                        <a class="dropdown-item" href="<?php echo e(url('bancos/index')); ?>"><i class="far fa-list-alt"></i> Lista de Bancos</a>
                         <a class="dropdown-item" href="<?php echo e(url('/capital')); ?>"><i class="far fa-list-alt"></i> Lista de Capital Propio</a>
                        <a class="dropdown-item" href="<?php echo e(url('/juradas')); ?>"><i class="far fa-list-alt"></i> Lista D.Juradas</a>
                        <a class="dropdown-item" href="<?php echo e(url('/infojuradas')); ?>">Lista empresas y sus Juradas </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo e(url('empresa/excel')); ?>"><i class="far fa-file-excel"></i> Listado de Empresas</a>
                        <a class="dropdown-item" href="<?php echo e(route('socioexcel')); ?>"><i class="far fa-file-excel"> </i> Listado de Socios</a>
                        <a class="dropdown-item" href="<?php echo e(url('jurada/Exports')); ?>"><i class="far fa-file-excel"></i> Listado D. Juradas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-archive" style=color:#80202b></i>
                        <strong> Archivos</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(url('file/show')); ?>">Lista empresas y sus archivos</a>
                        <a class="dropdown-item" href="<?php echo e(url('listacategori')); ?>"><i class="far fa-list-alt"></i> Lista de directorios</a>
                        <a class="dropdown-item" href="<?php echo e(url('fileslista')); ?>"><i class="far fa-list-alt"></i> Lista de archivos</a>
                    </div>
                </li>
            </ul>
          

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <ul class="navbar-nav ml-auto" >
                    <li class="nav-item dropdown">
                        <a class="btn btn-outline-dark btn-sm" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-cog"></i></a>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('settings')); ?>">Configuraciones</a>
                            <a class="dropdown-item" href="<?php echo e(route('activiti')); ?>">Lista actividades</a>
                        </div>
                    </li>
                 </ul>

               <ul class="navbar-nav ml-auto" >
                    <li class="nav-item dropdown">
                        <a class="btn btn-outline-dark btn-sm" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-bell"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="ver-msge">Mensajes externos</a>
                            <a class="dropdown-item" href="<?php echo e(route('chatear')); ?>">Chat usuarios</a>
                        </div>
                    </li>
                </ul>
                <a>&nbsp;</a>
                <!-- Authentication Links      $mess}} -->
                <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                    </li>
                    <li class="nav-item">
                        <?php if(Route::has('register')): ?>
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        <?php endif; ?>
                    </li>
                <?php else: ?>

                 <img src="/storage/avatars/<?php echo e(Auth::user()->avatar); ?>" width="25" height="23" class="img-circle" />
                    <li class="nav-item dropdown" >
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <strong> <?php echo e(Auth::user()->nickname); ?></strong> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >
                            <div class="row justify-content-center">

                               <img class="rounded-circle" src="/storage/avatars/<?php echo e(Auth::user()->avatar); ?>" width="100" height="100" />
                            </div>
                            <div class="row justify-content-center mt-2">
                                <p> <?php echo e(Auth::user()->name); ?><p>
                            </div>
                            <div class="row justify-content-center">
                                <a class="dropdown-item" href="<?php echo e(url('/habilidades')); ?>">Lista de Habilidades</a>
                                <a class="dropdown-item" href="<?php echo e(url('/profesiones')); ?>">Lista de Profesiones</a>
                                <a class="dropdown-item" href="<?php echo e(url('/usuarios')); ?>"><i class="far fa-list-alt"></i> Lista de Usuarios</a>
                                <a class="dropdown-item" href="<?php echo e(route('Exports',[$user='0',$pd='0'])); ?>"><i class="far fa-file-excel"></i> Listado Usuarios</a>

                            </div>
                            <div class="dropdown-divider"></div>
                                <div class="float-left">
                                    <a class="dropdown-item" href="<?php echo e(url('/profile')); ?>" >Ver Foto</a>
                                 </div>
                                <div class="float-right">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"> <?php echo e(__('Salir')); ?>  </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
</nav>

<?php /**PATH C:\laragon\www\Herberk\resources\views/layouts/partials/_navbar.blade.php ENDPATH**/ ?>