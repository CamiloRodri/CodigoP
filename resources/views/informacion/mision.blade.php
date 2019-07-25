@extends('admin.header')

@section('content')

        <h1 class="page-title"> Misión
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Inicio</a>
                    <i class="fa fa-angle-right"></i>
	            </li>
	            <li>
	                <a href="#">Informacion</a>
	                <i class="fa fa-angle-right"></i>
	            </li>
	            <li>
	                <span>Misión</span>
	            </li>
            </ul>
        </div>
        <!-- END PAGE HEADER-->
        <div class="note note-info">
            {{-- <p> La Universidad de Cundinamarca es una institución pública local del Siglo XXI, caracterizada por ser una organización social de conocimiento, democrática, autónoma, formadora, agente de la transmodernidad que incorpora los consensos mundiales de la humanidad y las buenas prácticas de gobernanza universitaria, cuya calidad se genera desde los procesos de enseñanza - aprendizaje, investigación e innovación, e interacción universitaria.</p> --}}
            <p>{{ $info->mision }}</p>
        </div>

@endsection