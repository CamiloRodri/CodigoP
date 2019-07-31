
@extends('admin.header')

@section('content')
	<!-- BEGIN CONTENT -->

                    <h1 class="page-title"> Listado de Libros
                   </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="{{ asset('inicio') }}">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Libros</span>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Lista</span>
                            </li>
                        </ul>
                        
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN : OVERLAY -->
                    <div class="row">

                        {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="portlet light portlet-fit ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-layers font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">Overlay 5</span>
                                   </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="mt-element-overlay">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mt-overlay-5">
                                                    <img src="../assets/pages/img/background/12.jpg" />
                                                    <div class="mt-overlay">
                                                        <h2>Overlay Title</h2>
                                                        <p>
                                                            <a class="uppercase" href="#">Learn More</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        
                        @foreach($libros as $libro)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="portlet light portlet-fit ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-layers font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">{{ $libro->titulo }}</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="mt-element-overlay">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mt-overlay-6">
                                                    <img src="../images/Libros/{{ $libro->foto }}" width="500" height="250"/>
                                                    <div class="mt-overlay">
                                                        <h2>{{ $libro->titulo }}</h2>
                                                        <p>
                                                            <a class="mt-info uppercase btn default btn-outline" href="{{ route('libro.show', ['id' => $libro->id]) }}">Leer Mas</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        


                    </div>
                    <!-- END : OVERLAY -->
@endsection