<header class="main-header">

    <!-- LOGOTIPO -->
    <a href="inicio" class="logo">
        <!-- Logo mini -->
        <span class="logo-mini">
            <img src="" 
            alt="" class="img-responsive" style="padding:10px">
        </span>
        <!-- Logo normal  -->
        <span class="logo-lg">
            <img src="" 
            alt="" class="img-responsive" style="padding:10px 0px">
        </span>
    </a>

    <!-- BARRA DE NAVEGACION -->
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#_" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle Navigation</span>
        </a>

        <!-- PERFIL DE USUARIO -->

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php 
                        if($_SESSION["foto"] != ""){
                            echo '<img src="'.$_SESSION["foto"].'" alt="" class="user-image">';
                        }else{

                            echo '<img src="vistas/img/usuarios/default/anonymous.png" alt="" class="user-image">';
                        }
                        ?>
                        
                        <span class="hidden-xs"><?php echo $_SESSION["nombre"]; ?></span>
                    </a>

                    <!-- DROPDOWN TOGGLE-->
                    <ul class="dropdown-menu">
                        <li class="user-body">
                            <div class="pull-right">
                                <a href="salir" class="btn btn-default btn-flat">Salir</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>