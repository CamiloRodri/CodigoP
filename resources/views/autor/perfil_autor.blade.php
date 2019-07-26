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
	<h1 class="page-title"> Información de {{ $autor->name_autor }}
	</h1>
	<div class="page-bar">
	    <ul class="page-breadcrumb">
	        <li>
	            <i class="icon-home"></i>
	            <a href="index.html">Home</a>
	            <i class="fa fa-angle-right"></i>
	        </li>
	        <li>
	            <span>Autor</span>
	            <i class="fa fa-angle-right"></i>
	        </li>
	        <li>
	            <span>{{ $autor->name_autor }}</span>
	        </li>
	    </ul>
	</div>
	<!-- END PAGE HEADER-->

	<div class="profile">
		<div class="row">
            <div class="col-md-3">
                <ul class="list-unstyled profile-nav">
                    <li>
                        <img src="../images/Autores/{{ $autor->foto }}" width="500" height="230" class="img-responsive pic-bordered" alt="" />
                       {{--  <a href="javascript:;" class="profile-edit"> </a> --}}
                    </li>
                    </li>
                    @if(Entrust::can('editar-autores'))
                    <li>
                        <a href="{{ route('autor.edit', ['id' => $autor->id]) }}"> Editar </a>
                    </li>
                    @endif
                    @if(Entrust::can('eliminar-autores'))
                    <form action="{{ route('autor.destroy', ['id' => $autor->id]) }}" method="POST">
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
                        <h1 class="font-green sbold uppercase">{{ $autor->name_autor }}</h1>
                        <p>
	                        <?php 
	                        	$var=nl2br(" $autor->biografia ");
	                        	echo $var 
	                        ?>
                        </p>
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
            
			<div class="portlet-body">
                <table class="table table-striped table-bordered table-advance table-hover">
                    <thead>
                        <tr>
                            <th>
                                <i class="fa fa-book"></i> Libro 
                            </th>
                            <th class="hidden-xs">
                                <i class="fa fa-question"></i> Paginas 
                            </th>
                            <th>
                                <i class="fa fa-bookmark"></i> Publicación
                            </th>

                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($libros as $libro)

                         <tr>
                            {{-- <td> 
                                <img src="../images/Libros/{{ $libro->foto }}" width="50" height="100" />
                            </td> --}}
                            <td>
                                <i> {{ $libro->titulo }} </i>
                            </td>
                            <td 
                                class="hidden-xs"> {{ $libro->paginas }} 
                            </td>
                            <td 
                                class="hidden-xs"> {{ $libro->fecha_publicacion }} 
                            </td>
                            <td>
                                <a class="btn btn-sm grey-salsa btn-outline" href="{{ route('libro.show', ['id' => $libro->id]) }}"> View </a>
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
	</div>


@endsection