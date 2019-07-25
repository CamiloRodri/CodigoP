@extends('admin.header')

@section('content')
@if(Entrust::can('agregar-ejemplar'))
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

                    <form method="POST" action="{{ url('crearejemplar') }}" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-body">
                            {{-- <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button> Tienes algunos errores. Por favor, comprueba tu información. </div>
                            <div class="alert alert-success display-hide">
                                <button class="close" data-close="alert"></button> La Informacion es Correcta! </div> --}}
                            <div class="form-group">
                                <label class="control-label col-md-3">Libro
                                	<span class="required"> * </span>		
                                </label>
                                <div class="col-md-4">                                   
                                    {{-- <select class="bs-select form-control input-small" data-style="btn-primary"> --}}
                                        <select class="bs-select form-control" data-width="75%" name="libro_id">
                                            @foreach($libros as $libro)
                                                {{-- <option>{{ $rols->nombre_rol }}</option> --}}
                                                <option value="{{$libro->id}}">{{$libro->titulo}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            
                           <div class="form-group  margin-top-20">
                                <label class="control-label col-md-3">Codigo
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                        @if($errors->has('codigo'))
                                            <div class="form-group has-error">
                                                <div class="col-md-12">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-warning tooltips" data-original-title="Esta campo es requerido."></i>
                                                        <input type="text" name="codigo" class="form-control" value="{{ old('codigo')}}"/>
                                                     </div>
                                                </div>
                                            </div>
                                        @else
                                            <input type="text" name="codigo" class="form-control" value="{{ old('codigo')}}"/>
                                        @endif 
                                </div>
                            </div>  
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Registrar</button>
                                    <a href="{{ asset('ejemplar') }}">
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