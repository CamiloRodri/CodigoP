@extends('admin.header')

@section('content')

	@if(Entrust::can('modificar-mision'))   
	@endif
@endsection