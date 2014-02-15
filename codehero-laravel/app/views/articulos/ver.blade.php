@extends('layouts.master')

@section('sidebar')
	@parent
	Leer artículo {{$articulo->titulo}}
@stop

@section('content')
	{{HTML::link('usuarios', 'Volver');}}

	<h1> 
		{{$articulo->title}}
	</h1>

	{{$articulo->text}}

	<script type="javascript">
		
	</script>

@stop