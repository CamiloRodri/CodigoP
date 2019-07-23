@extends ('admin.header')

@section('content')  
@if(Entrust::can('agregar-usuarios'))                
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Agregar Usuarios</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->

                    <form method="POST" action="{{ url('crear') }}" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-body">
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button> Tienes algunos errores. Por favor, comprueba tu información. </div>
                            <div class="alert alert-success display-hide">
                                <button class="close" data-close="alert"></button> La Informacion es Correcta! </div>
                            <div class="form-group  margin-top-20">
                                <label id="name" class="control-label col-md-3">Nombre
                                    <span class="required"> * </span> 
                                </label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <i class="fa"></i>
                                        <input type="text" class="form-control" name="name" value="{{ old('name')}}" /> </div>
                                </div>
                            </div>
                            <div class="form-group  margin-top-20">
                                <label class="control-label col-md-3">Apellido
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                        @if($errors->has('lastname'))
                                            <div class="form-group has-error">
                                                <div class="col-md-12">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-warning tooltips" data-original-title="Este campo es requerido."></i>
                                                        <input type="text" name="lastname" class="form-control" />
                                                     </div>
                                                </div>
                                            </div>
                                        @else
                                            <input type="text" name="lastname" class="form-control" value="{{ old('lastname')}}"/>
                                        @endif 
                                </div>
                            </div>

                            

                            <div class="form-group  margin-top-20">
                                <label class="control-label col-md-3">Contraseña
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <i class="fa"></i>
                                        <input type="password" class="form-control" name="password" value="{{ old('password')}}"/> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Email
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <i class="fa"></i>
                                        <input type="text" class="form-control" name="email" value="{{ old('email')}}"/> </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">Telefono
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <i class="fa"></i>
                                        <input type="text" class="form-control" name="number" value="{{ old('number')}}"/> </div>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <label class="control-label col-md-3">Rol
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <i class="fa"></i>
                                        <input type="text" class="form-control" name="rol_id" /> </div>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label class="control-label col-md-3">Rol</label>
                                <div class="col-md-4">
                                    {{-- <select class="bs-select form-control input-small" data-style="btn-primary"> --}}
                                    <select class="bs-select form-control" data-width="75%" name="role_id">
                                        @foreach($rol as $rols)
                                            {{-- <option>{{ $rols->nombre_rol }}</option> --}}
                                            <option value="{{$rols->id}}">{{$rols->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>




                            <div class="form-group  margin-top-20">
                                <label class="control-label col-md-3">Dirección
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <i class="fa"></i>
                                        <input type="text" class="form-control" name="direccion" /> </div>
                                </div>
                            </div>

                            <div class="form-group  margin-top-20">
                                <label class="control-label col-md-3">Foto
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    @if($errors->has('foto'))
                                            <div class="form-group has-error">
                                                <div class="col-md-12">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-warning tooltips" data-original-title="Esta campo es requerido."></i>
                                                        {{-- <input type="text" class="form-control" name="descripcion" value="{{ old('descripcion')}}"/> </div> --}}
                                                        <input type="file" class="form-control" name="foto" />
                                                    </div>
                                                </div>
                                            </div>
                                    @else
                                    {{-- <input type="text" name="paginas" class="form-control" value="{{ old('paginas')}}"/> --}}
                                    <input type="file" class="form-control" name="foto" />
                                    @endif 
                                </div>
                            </div>

                        </div>

                        
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Registrar</button>
                                    <a href="{{ asset('lista') }}">
                                        <button type="button" class="btn default">Cancelar</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
    @endif
@endsection