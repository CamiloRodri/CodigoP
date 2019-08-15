@extends('admin.header')
@section('content')   
@if(Entrust::can('ver-pedido'))        
{{-- {{ toastr.info("{{ Session::get('message') }}") }} --}}
<!-- END THEME PANEL -->
    <h1 class="page-title"> Pedido
    </h1>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Pedido</a>
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
                        <span class="caption-subject bold uppercase"> Carrito</span>
                    </div>
                </div>

                <div class="portlet-body">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="{{ route('codigo.generate') }}">
                            <button id="sample_editable_1_new" class="btn sbold green"> Confirmar Pedido                                       
                                <i class="fa fa-check"></i> 
                            </button>
                            </a>
                            <br>
                            <br>
                        </div>
                    </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th style="visibility: hidden"> Numero </th>
                                <th> Ejemplar </th>
                                <th> Libro </th>
                                <th> Codigo </th>
                                <th> Acción </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($pedidos as $pedido)
                                <tr class="odd gradeX"> 
                                    <td style="visibility: hidden" width="1" height="1"> 
                                        {{ $pedido->id }} 
                                    </td>   
                                    <td class="center"> 
                                        {{ $carrito->ejemplar_id }} 
                                    </td>
                                    <td class="center">
                                        {{ $carrito->ejemplar->libro->titulo }}
                                        {{-- @foreach($libros as $libro)
                                            @if($libro->id == $carrito->ejemplar->libro_id)
                                                {{ $libro->titulo }}
                                            @endif
                                        @endforeach --}}
                                    </td>
                                    <td class="center">
                                        {{ $carrito->ejemplar->codigo }}
                                    </td>
                                    <td class="center"> 
                                        {{ $carrito->user_id }} 
                                    </td>
                                </tr >
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
           
        </div>
    </div>
@endif
@endsection

@section('head')

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