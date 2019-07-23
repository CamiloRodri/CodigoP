@extends('admin.header')

@section('content')
    @if(Entrust::can('editar-libros'))   
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Editar Libro {{ $libro->titulo }}</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->

                    <form method="POST" action="{{ url("libros/{$libro->id}") }}" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="form-body">
                            {{-- <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button> Tienes algunos errores. Por favor, comprueba tu información. </div>
                            <div class="alert alert-success display-hide">
                                <button class="close" data-close="alert"></button> La Informacion es Correcta! </div> --}}
                            <div class="form-group  margin-top-20">
                                <label id="name" class="control-label col-md-3">Nombre Libro
                                    <span class="required"> * </span> 
                                </label>
                                <div class="col-md-4">
                                    @if($errors->has('titulo'))
                                            <div class="form-group has-error">
                                                <div class="col-md-12">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-warning tooltips" data-original-title="Esta campo es requerido."></i>
                                                        <input type="text" class="form-control" name="titulo" value="{{ $libro->titulo }}" /> 
                                                    </div>
                                                </div>
                                            </div>
                                    @else
                                        <input type="text" name="titulo" class="form-control" value="{{ $libro->titulo }}"/>
                                    @endif 
                                </div>
                            </div>
                            <div class="form-group  margin-top-20">
                                <label class="control-label col-md-3">Numero de Paginas
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                        @if($errors->has('paginas'))
                                            <div class="form-group has-error">
                                                <div class="col-md-12">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-warning tooltips" data-original-title="Esta campo es requerido."></i>
                                                        <input type="text" name="paginas" class="form-control" value="{{ $libro->paginas }}"/>
                                                     </div>
                                                </div>
                                            </div>
                                        @else
                                            <input type="text" name="paginas" class="form-control" value="{{ $libro->paginas }}"/>
                                        @endif 
                                </div>
                            </div>

                            <div class="form-group  margin-top-20">
                                <label class="control-label col-md-3">Descripción
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    @if($errors->has('descripcion'))
                                            <div class="form-group has-error">
                                                <div class="col-md-12">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-warning tooltips" data-original-title="Esta campo es requerido."></i>
                                                        {{-- <input type="text" class="form-control" name="descripcion" value="{{ old('descripcion')}}"/> </div> --}}
                                                        <textarea class="form-control" rows="3" name="descripcion"  value="{{ old('fecha_publicacion')}}" >{{ $libro->descripcion }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                    @else
                                    {{-- <input type="text" name="paginas" class="form-control" value="{{ old('paginas')}}"/> --}}
                                    <textarea class="form-control" rows="3" name="descripcion" value="{{ old('fecha_publicacion')}}" >{{ $libro->descripcion }}</textarea>
                                    @endif 
                                </div>
                            </div>
                            
                            <div class="form-group  margin-top-20">
                                <label class="control-label col-md-3">Fecha de Publicación
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                        @if($errors->has('fecha_publicacion'))
                                            <div class="form-group has-error">
                                                <div class="col-md-12">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-warning tooltips" data-original-title="Esta campo es requerido."></i>
                                                        <input type="text" name="fecha_publicacion" class="form-control" value="{{ $libro->fecha_publicacion }}"/>
                                                     </div>
                                                </div>
                                            </div>
                                        @else
                                            <input type="text" name="fecha_publicacion" class="form-control" value="{{ $libro->fecha_publicacion }}"/>
                                        @endif 
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Autor</label>
                                <div class="col-md-4">                                   
                                    {{-- <select class="bs-select form-control input-small" data-style="btn-primary"> --}}
                                        <select class="bs-select form-control" data-width="75%" name="autor_id">
                                            @foreach($autors as $autor)
                                                {{-- <option>{{ $rols->nombre_rol }}</option> --}}
                                                <option value="{{$autor->id}}">{{$autor->name_autor}}</option>
                                            @endforeach
                                        </select>
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

                        </div>

                        
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Editar</button>
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