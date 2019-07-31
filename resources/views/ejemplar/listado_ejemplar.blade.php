@extends('admin.header')

@section('content')
@if(Entrust::can('ver-usuarios'))     
{{-- {{ toastr.info("{{ Session::get('message') }}") }} --}}
<!-- END THEME PANEL -->
    <h1 class="page-title"> Lista de Ejemplares
    </h1>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Ejemplar</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Lista</span>
            </li>
        </ul>
    </div>
    {{-- {{ toastr.info("hola")s }} --}}
    {{-- {{ dd(array_get($notification, 'message')) }} --}}
    {{-- {{ dd(Session::has(array_get($notification, 'message'))) }} --}}
    <!-- END PAGE HEADER-->
    {{-- {{ dd($notification) }} --}}

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> Lista de Ejemplares</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-6">
                                <div class="btn-group pull-right">
                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Herramientas
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-print"></i> Print </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-pdf-o"></i> Guardar PDF </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-excel-o"></i>Exportar a Excel </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th style="visibility: hidden"> Numero </th>
                                <th> Libro </th>
                                <th> Codigo </th>
                                <th> Estado </th>
                                <th> Editar/Eliminar </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($ejemplares as $ejemplar)
                                <tr class="odd gradeX"> 

                                    <td style="visibility: hidden" width="1" height="1"> 
                                        {{ $ejemplar->id }} 
                                    </td>                                   
                                    <td> 
                                    	{{-- {{ $ejemplar->libro_id }}  --}}
										@foreach($libros as $libro)
											@if($ejemplar->libro_id == $libro->id)
											{{ $libro->titulo }}
											@endif
										@endforeach
                                    </td>
                                    <td>
                                        {{ $ejemplar->codigo }}
                                    </td>
                                    <td class="center"> 
                                    	{{-- {{ $ejemplar->estado }} --}}
                                        @foreach($estados as $estado)
                                            @if($ejemplar->estado_id == $estado->id)
                                                {{ $estado->estado }}
                                            @endif
                                        @endforeach
                                    	
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Acciones
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-left" role="menu">
                                                <li>
                                                    <a href="{{ route('ejemplar.show', ['id' => $ejemplar->id]) }}">
                                                        <i class="icon-docs"></i> Editar </a>
                                                </li>
                                                {{-- <li>
                                                    <form action="{{ route('usuario.destroy', ['id' => $ejemplar->id]) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <a>
                                                        <i class="icon-tag"></i> Eliminar </a>
                                                    </form>
                                                    
                                                </li> --}}
                                                <li>
                                                    <form action="{{ route('ejemplar.destroy', ['id' => $ejemplar->id]) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        &nbsp&nbsp
                                                        <i class="icon-tag"></i>
                                                        <button type="submit"> Eliminar </button>
                                                    </form>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            
                            {{-- <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> shuxer </td>
                                <td>
                                    <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-success"> Approved </span>
                                </td>
                                <td class="center"> 12 Jan 2012 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-ejemplar"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr> --}}
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
           
        </div>
    </div>
@endif
@endsection

@section('foot')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection