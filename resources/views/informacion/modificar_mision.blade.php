@extends('admin.header')

@section('content')

	@if(Entrust::can('modificar_mision'))   
	@endif
@endsection