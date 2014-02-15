@extends('layouts.master')

@section('sidebar')
	@parent
	
@stop

@section('content')
	<h1>Ver usuario</h1>
	{{HTML::link('usuarios', 'Volver');}}

	<h3> 
		Usuario {{$usuario->nombre}}
	</h3>

	El usuario se llama {{$usuario->nombre}} {{$usuario->apellido}}
	Tiene id = {{$usuario->id}}
	Fue creado el {{$usuario->created_at}}
	<br>
	{{HTML::link('articulos/nuevo/', 'Crear artículo');}}

	<h3>Artículos escritos: </h3>
	
	@foreach ($articulos as $articulo)
    	{{HTML::link('articulos/'.$articulo->id, $articulo->title);}}
	@endforeach
@stop