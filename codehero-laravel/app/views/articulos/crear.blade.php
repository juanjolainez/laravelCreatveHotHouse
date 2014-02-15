@extends('layouts.master')
 
@section('sidebar')
     @parent
@stop
 
@section('content')
        <h1>{{$usuario->nombre}} - Crear un artículo </h1>
        {{ HTML::link('usuarios', 'volver'); }}
        <h2>
  			Crear artículo
		</h2>
		
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