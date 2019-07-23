@extends('admin.header')

@section('content')

	@if(Entrust::can('modificar-vision'))   
	@endif
@endsection