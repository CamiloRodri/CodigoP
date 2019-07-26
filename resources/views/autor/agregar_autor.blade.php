@extends('admin.header')

@section('content')
    @if(Entrust::can('agregar-autores'))
	<div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Agregar Autor</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->

                    <form method="POST" action="{{ url('crearautor') }}" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-body">
                            {{-- <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button> Tienes algunos errores. Por favor, comprueba tu información. </div>
                            <div class="alert alert-success display-hide">
                                <button class="close" data-close="alert"></button> La Informacion es Correcta! </div> --}}
                            <div class="form-group  margin-top-20">
                                <label id="name" class="control-label col-md-3">Nombre Autor
                                    <span class="required"> * </span> 
                                </label>
                                <div class="col-md-4">
                                    @if($errors->has('name_autor'))
                                            <div class="form-group has-error">
                                                <div class="col-md-12">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-warning tooltips" data-original-title="Esta campo es requerido."></i>
                                                        <input type="text" class="form-control" name="name_autor" value="{{ old('name_autor')}}" /> 
                                                    </div>
                                                </div>
                                            </div>
                                    @else
                                        <input type="text" name="name_autor" class="form-control" value="{{ old('name_autor')}}"/>
                                    @endif 
                                </div>
                            </div>
                            
                            <div class="form-group  margin-top-20">
                                <label class="control-label col-md-3">Biografia
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    @if($errors->has('biografia'))
                                            <div class="form-group has-error">
                                                <div class="col-md-12">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-warning tooltips" data-original-title="Esta campo es requerido."></i>
                                                        {{-- <input type="text" class="form-control" name="biografia" value="{{ old('biografia')}}"/> </div> --}}
                                                        <textarea class="form-control" rows="3" name="biografia" value="{{ old('biografia')}}" ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                    @else
                                    {{-- <input type="text" name="paginas" class="form-control" value="{{ old('paginas')}}"/> --}}
                                    <textarea class="form-control" rows="3" name="biografia" value="{{ old('biografia')}}" ></textarea>
                                    @endif 
                                </div>
                            </div>                            
                           
                            {{-- <div class="form-group  margin-top-20">
                                <label class="control-label col-md-3">Foto
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    @if($errors->has('foto'))
                                            <div class="form-group has-error">
                                                <div class="col-md-12">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-warning tooltips" data-original-title="Esta campo es requerido."></i>
                                                        
                                                        <input type="file" class="form-control" name="foto" />
                                                    </div>
                                                </div>
                                            </div>
                                    @else
                                    <input type="file" class="form-control" name="foto" />
                                    @endif 
                                </div>
                            </div> --}}

                            
                            <div class="form-group last">
                                <label class="control-label col-md-3">Foto
                                        <span class="required"> * </span>
                                </label>
                                @if($errors->has('foto'))
                                    <div class="form-group has-error">
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <i class="fa fa-warning tooltips" data-original-title="Esta campo es requerido."></i>
                                                <div class="col-md-4">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Seleccionar Imagen </span>
                                                                <span class="fileinput-exists"> Cambiar </span>
                                                                <input type="file" name="foto"> </span>
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Quitar </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <label class="control-label col-md-3">  
                                    </label>
                                    <div class="col-md-8">
                                        <span class="label label-danger">NOTA!</span>La vista previa de la imagen solo funciona en IE10 +, FF3.6 +, Safari6.0 +, Chrome6.0 + y Opera11.1 +. En navegadores más antiguos se muestra el nombre del archivo en su lugar.
                                    </div>
                                @else
                                    <div class="col-md-4">
                                        <div class="col-md-4">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                            <div>
                                                <span class="btn default btn-file">
                                                    <span class="fileinput-new"> Seleccionar Imagen </span>
                                                    <span class="fileinput-exists"> Cambiar </span>
                                                    <input type="file" name="foto"> </span>
                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Quitar </a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <label class="control-label col-md-3">  
                                    </label>
                                    <div class="col-md-8">
                                        <span class="label label-danger">NOTA!</span>La vista previa de la imagen solo funciona en IE10 +, FF3.6 +, Safari6.0 +, Chrome6.0 + y Opera11.1 +. En navegadores más antiguos se muestra el nombre del archivo en su lugar.
                                    </div>
                                @endif
                                
                            </div>
                            
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Registrar</button>
                                    <a href="{{ asset('libros') }}">
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