<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">USUARIOS</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Usuario</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li>
                            <i class="fa fa-puzzle-piece">
                            </i>
                            <a href="{{url('clientes/lista')}}" class="nav-link"><i class="icon icon-graph"></i> Listar
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title">PRODUCTOS</li><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Producto</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li>
                            <i class="fa fa-puzzle-piece">
                            </i>
                            <a href="{{url('productos/lista')}}" class="nav-link"><i class="icon icon-graph"></i> Listar
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-puzzle-piece">
                            </i>
                            <a href="{{url('producto/importar')}}" class="nav-link"><i class="icon icon-graph"></i> Importar
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title">SUCURSALES</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Tienda</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li>
                            <i class="fa fa-puzzle-piece">
                            </i>
                            <a href="{{url('tiendas/lista')}}" class="nav-link"><i class="icon icon-graph"></i> Listar
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title">TRANSACCIONES</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Recientes</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li>
                            <i class="fa fa-puzzle-piece">
                            </i>
                            <a href="{{url('transaccion/lista')}}" class="nav-link"><i class="icon icon-graph"></i> Listar
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
