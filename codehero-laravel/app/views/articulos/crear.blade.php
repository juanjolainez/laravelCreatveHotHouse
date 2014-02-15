@extends('layouts.master')
 
@section('sidebar')
     Crear un artículo en nombre de {{$usuario->nombre}}
@stop
 
@section('content')
        {{ HTML::link('usuarios', 'volver'); }}
        <h1>
  			Crear artículo
		</h1>
		
        {{ Form::open(array('url' => 'articulos/crear/'))}}
            {{Form::label('titulo', 'Titulo')}}
            {{Form::text('titulo', '')}}
            <br/>
            {{Form::label('texto', 'Texto')}}
            <br />
            {{Form::textarea('texto', '')}}
            <input type='hidden' name = 'usuario_id' value = {{$usuario->id}} />
            <br />
            {{Form::submit('Guardar')}}
        {{ Form::close() }}
@stop