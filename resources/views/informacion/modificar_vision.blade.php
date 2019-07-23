@extends('admin.header')

@section('content')

	@if(Entrust::can('modificar_vision'))   
	@endif
@endsection