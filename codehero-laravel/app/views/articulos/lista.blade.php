@extends('layouts.master')
 
@section('sidebar')
     Lista de artículos
@stop
 
@section('content')
        <h1>
  			Articulos
		</h1>

        {{ HTML::link('usuarios/', 'Ir a lista de usuarios'); }}
 
		<ul>
		  	@foreach($articulos as $articulo)
		        <li>
		    		{{ HTML::link( 'articulos/'.$articulo->id , $articulo->title) }}
		  		</li>
		  	@endforeach
		</ul>
@stop