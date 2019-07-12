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
                </ul>
            </li>
            
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">Biblioteca</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ asset('libros') }}" class="nav-link ">
                            <span class="title">Libros</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ asset('libros') }}" class="nav-link ">
                            <span class="title">Autores</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ asset('libros') }}" class="nav-link ">
                            <span class="title">Agregar Libros</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-bar-chart"></i>
                    <span class="title">Prestamo</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="charts_amcharts.html" class="nav-link ">
                            <span class="title">Ventas</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="charts_amcharts.html" class="nav-link ">
                            <span class="title">Pedido</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-pointer"></i>
                    <span class="title">Mapas</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="maps_google.html" class="nav-link ">
                            <span class="title">Google Maps</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            
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