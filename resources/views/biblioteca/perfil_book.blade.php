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
	            <a href="index.html">Home</a>
	            <i class="fa fa-angle-right"></i>
	        </li>
	        <li>
	            <span>Libros</span>
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
                        <img src="../{{ $libro->foto }}" width="500" height="230" class="img-responsive pic-bordered" alt="" />
                       {{--  <a href="javascript:;" class="profile-edit"> </a> --}}
                    </li>
                    <li>
                        <a href="javascript:;"> Prestamo </a>
                    </li>
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