@extends('admin.header')

@section('content')

	<h1 class="page-title"> Codigo
	</h1>

	<div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Codigo</span>
            </li>
        </ul>
    </div>

	<div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> Codigo para Reclamar</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-12">
                            	<div align='center'>
									<h1>{{ $codigo }}</h1>
									<br>
									<h3> Con Este Codigo, acercate a las instalaciones de la Universidad para que te hagan entrega de el/los libro(s)</h3>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection