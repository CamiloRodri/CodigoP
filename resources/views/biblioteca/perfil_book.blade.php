@extends('admin.header')

@section('content')

	<!-- BEGIN PAGE HEADER-->
	<!-- BEGIN THEME PANEL -->
	<div class="theme-panel">
	    <div class="toggler tooltips" data-container="body" data-placement="left" data-html="true" data-original-title="Click to open advance theme customizer panel">
	        <i class="icon-settings"></i>
	    </div>
	    <div class="toggler-close">
	        <i class="icon-close"></i>
	    </div>
	</div>
	<!-- END THEME PANEL -->
	<h1 class="page-title"> Información de {{ $libro->titulo }}
	</h1>
	<div class="page-bar">
	    <ul class="page-breadcrumb">
	        <li>
	            <i class="icon-home"></i>
	            <a href="{{ asset('inicio') }}">Home</a>
	            <i class="fa fa-angle-right"></i>
	        </li>
	        <li>
                <a href="{{ route('libro.list') }}">Libros</a>
	            <i class="fa fa-angle-right"></i>
	        </li>
	        <li>
	            <span>{{ $libro->titulo }}</span>
	        </li>
	    </ul>
	</div>
	<!-- END PAGE HEADER-->

	<div class="profile">
		<div class="row">
            <div class="col-md-3">
                <ul class="list-unstyled profile-nav">
                    <li>
                        <img src="../images/Libros/{{ $libro->foto }}" width="500" height="230" class="img-responsive pic-bordered" alt="" />
                       {{--  <a href="javascript:;" class="profile-edit"> </a> --}}
                    </li>
                    @if(Entrust::can('ver-carrito'))
                    {{-- <li>
                        <a href="javascript:;"> Añadir al Carrito </a>
                    </li> --}}
                    <li> <br> </li>
                    <li>
                        <font size=3><b>Cantidades Disponibles:</b>  {{ $countejemplar }}</font>
                    </li>
                    <form method="POST" action="{{ url("agcarrito") }}" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <li>
                                <input type="hidden" class="form-control" name="ejemplar_id" value="{{ $libro->id }}" visible="false" /> 
                                <br> 
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            @if($countejemplar == 0)
                                                <button type="submit" class="btn green" disabled>Añadir al Carrito</button>
                                            @else
                                                <button type="submit" class="btn green" >Añadir al Carrito</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </li>
                    </form>
                    @endif
                    @if(Entrust::hasRole('Administrador'))
                    <li>
                        <a href="{{ route('libro.edit', ['id' => $libro->id]) }}"> Editar </a>
                    </li>
                    @endif
                    @if(Entrust::hasRole('Administrador'))
                    <form action="{{ route('libro.destroy', ['id' => $libro->id]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @endif
                </ul>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-8 profile-info">
                        <h1 class="font-green sbold uppercase">{{ $libro->titulo }}</h1>
                        <p>
	                        <?php 
	                        	$var=nl2br(" $libro->descripcion ");
	                        	echo $var 
	                        ?>
                        </p>

                        <font size=3><b>Numero de Paginas:</b>  {{ $libro->paginas }}</font>
						<p></p>
                        <font size=3><b>Año de Publicación:</b>  {{ $libro->fecha_publicacion }}</font>
                        {{-- <ul class="list-inline">
                            <li>
                                <i class="fa fa-map-marker"></i> Spain </li>
                            <li>
                                <i class="fa fa-calendar"></i> 18 Jan 1982 </li>
                            <li>
                                <i class="fa fa-briefcase"></i> Design </li>
                            <li>
                                <i class="fa fa-star"></i> Top Seller </li>
                            <li>
                                <i class="fa fa-heart"></i> BASE Jumping </li>
                        </ul> --}}
                    </div>
                    <!--end col-md-8-->
                    
                    <!--end col-md-4-->
                </div>
                <!--end row-->
                
            </div>
             
			
        </div>
	</div>

@endsection