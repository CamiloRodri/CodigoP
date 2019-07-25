@extends('admin.header')

@section('content')

        <h1 class="page-title"> Visión
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
	                <span>Visión</span>
	            </li>
            </ul>
        </div>
        <!-- END PAGE HEADER-->
        <div class="note note-info">
            {{-- <p> La Universidad de Cundinamarca será reconocida por la sociedad, en el ámbito local, regional, nacional e internacional, como generadora de conocimiento relevante y pertinente, centrada en el cuidado de la vida, la naturaleza, el ambiente, la humanidad y la convivencia.</p> --}}
            <p>{{ $info->vision }}</p>        
        </div>

@endsection