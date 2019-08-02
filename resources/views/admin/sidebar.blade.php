    <!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- END SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Inicio</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start ">
                        <a href="{{ asset('inicio') }}" class="nav-link ">
                            <i class="icon-home"></i>
                            <span class="title">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="{{ asset('mision') }}" class="nav-link ">
                            <i class="fa fa-hand-o-right"></i>
                            <span class="title">Misión</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="{{ asset('vision') }}" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">Visión</span>
                        </a>
                    </li>
                    @if(Entrust::can('modificar-mision'))
                    <li class="nav-item start ">
                        <a href="{{ route('mision.edit') }}" class="nav-link ">
                            <i class="fa fa-hand-o-right"></i>
                            <span class="title">Modificar Misión</span>
                        </a>
                    </li>
                    @endif
                    @if(Entrust::can('modificar-vision'))
                    <li class="nav-item start ">
                        <a href="{{ route('vision.edit') }}" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">Modificar Visión</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </li>
            
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">Biblioteca</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{ route('libro.list') }}" class="nav-link ">
                            <i class="fa fa-book"></i>
                            <span class="title">Libros</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ asset('autor') }}" class="nav-link ">
                            <i class="fa fa-male"></i>
                            <span class="title">Autores</span>
                        </a>
                    </li>
                    @if(Entrust::can('ver-ejemplar'))
                    <li class="nav-item  ">
                        <a href="{{ route('ejemplar.list') }}" class="nav-link ">
                            <i class="fa fa-bookmark"></i>
                            <span class="title">Ejemplar</span>
                        </a>
                    </li>
                    @endif
                    @if(Entrust::can('agregar-libros'))
                    <li class="nav-item  ">
                        <a href="{{ route('libro.create') }}" class="nav-link ">
                            <i class="fa fa-book"></i>
                            <span class="title">Agregar Libros</span>
                        </a>
                    </li>
                    @endif
                    @if(Entrust::can('agregar-autores'))
                    <li class="nav-item  ">
                        <a href="{{ route('autor.create') }}" class="nav-link ">
                            <i class="fa fa-male"></i>
                            <span class="title">Agregar Autores</span>
                        </a>
                    </li>
                    @endif
                    @if(Entrust::can('agregar-ejemplar'))
                    <li class="nav-item  ">
                        <a href="{{ route('ejemplar.create') }}" class="nav-link ">
                            <i class="fa fa-bookmark"></i>
                            <span class="title">Agregar Ejemplar</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </li>
            @if(Entrust::can('ver-carrito'))
            <li class="nav-item  ">
                <a href="{{ route('carrito.list') }}" class="nav-link nav-toggle">
                    <i class="icon-basket"></i>
                    <span class="title">Carrito</span>
                    <span class="arrow"></span>
                </a>
            </li>
            @endif
            @if(Entrust::can('prestamo'))
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-bar-chart"></i>
                    <span class="title">Prestamo</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    @if(Entrust::can('ver-ventas'))
                    <li class="nav-item  ">
                        <a href="charts_amcharts.html" class="nav-link ">
                            <i class="fa fa-money"></i>
                            <span class="title">Ventas</span>
                        </a>
                    </li>
                    @endif
                    @if(Entrust::can('ver-pedido'))
                    <li class="nav-item  ">
                        <a href="charts_amcharts.html" class="nav-link ">
                            <i class="fa fa-upload"></i>
                            <span class="title">Pedido</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </li>
            @endif
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-pointer"></i>
                    <span class="title">Mapas</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="maps_google.html" class="nav-link ">
                            <i class="fa fa-map"></i>
                            <span class="title">Google Maps</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            @if(Entrust::hasRole('Administrador'))
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">Usuarios</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ asset('lista') }}" class="nav-link ">
                            <i class="icon-users"></i>
                            <span class="title">Lista de Usuarios</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">Configuración</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{ asset('usuario/perfil') }}" class="nav-link ">
                            <i class="fa fa-cog"></i>
                            <span class="title">Perfil</span>
                        </a>
                    </li>                                
                </ul>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->