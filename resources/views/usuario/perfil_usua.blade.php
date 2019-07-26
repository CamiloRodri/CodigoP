@extends('admin.header')

@section('content')

                    <h1 class="page-title"> Editar Perfil
                    </h1>
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet ">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic">
                                        <img src="../images/Usuarios/{{ $user->foto }}" class="img-responsive" alt=""> </div> 
                                        {{-- <img src="{{ asset('assets/pages/img/avatars/team1.jpg') }}" class="img-responsive" alt=""> </div> --}}
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name">{{ $user->name }} {{ $user->lastname }}</div>
                                        <div class="profile-usertitle-job"> {{ $rol->name }} </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <ul class="nav">
                                            <li>
                                                <a href="{{ asset('inicio') }}">
                                                    <i class="icon-home"></i> Inicio </a>
                                            </li>
                                            <li>
                                                <a href="page_user_profile_1_account.html">
                                                    <i class="icon-info"></i> Help </a>
                                            </li>

                                        </ul>
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                                <!-- PORTLET MAIN -->
                                <div class="portlet light ">
                                    <div>
                                        <h4 class="profile-desc-title">Acerca de {{ $user->name }}</h4>
                                        <span class="profile-desc-text"> {{ $rol->name }} </span>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-globe"></i>
                                            <a href="http://www.keenthemes.com">{{ $user->email }}</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Editar Perfil</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">Cuenta</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab">Cambiar Imagen</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_3" data-toggle="tab">Cambiar Contraseña</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form method="POST" role="form" action="{{ url("usuario/{$user->id}") }}">
                                                            {{-- {{ @method('PUT') }} --}}
                                                            {{ method_field('PUT') }}
                                                            {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <label class="control-label">Nombre</label>
                                                                <input type="text" value="{{ $user->name }}" placeholder="{{ $user->name }}" class="form-control" name="name"/> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Apellido</label>
                                                                <input type="text" value="{{ $user->lastname }}" placeholder="{{ $user->lastname }}" class="form-control" name="lastname"/> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Numero de Telefono</label>
                                                                <input type="text" value="{{ $user->telefono }}" placeholder="{{ $user->telefono }}" class="form-control" name="number"/> </div>
                                                            
                                                            <div class="form-group">
                                                                <label class="control-label">Email</label>
                                                                <input type="text" value="{{ $user->email }}" placeholder="{{ $user->email }}" class="form-control" name="email"/> </div>
                                                            <div class="margiv-top-10">
                                                                <button type="submit" class="btn green">Editar</button>
                                                                {{-- <a href="javascript:;" class="btn default"> Cancel </a> --}}
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                    <!-- CHANGE AVATAR TAB -->
                                                    <div class="tab-pane" id="tab_1_2">
                                                        <p> Seleccione Nueva Imagen de Perfil </p>
                                                        <form action="#" role="form">
                                                            <div class="form-group">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new"> Seleccioar Imagen </span>
                                                                            <span class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="..."> </span>
                                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix margin-top-10">
                                                                    <span class="label label-danger">NOTE! </span>
                                                                    <span>La miniatura de la imagen adjunta es compatible solo con las últimas versiones de Firefox, Chrome, Opera, Safari e Internet Explorer 10 </span>
                                                                </div>
                                                            </div>
                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn green"> Editar </a>
                                                                {{-- <a href="javascript:;" class="btn default"> Cancel </a> --}}
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE AVATAR TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane" id="tab_1_3">
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <label class="control-label">Actual Contraseña</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Nueva Contraseña</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Reescriba Nueva Contraseña</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn green"> Cambiar Contraseña </a>
                                                                {{-- <a href="javascript:;" class="btn default"> Cancel </a> --}}
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>


{{--    {{ $user->id }} --}}

@endsection
