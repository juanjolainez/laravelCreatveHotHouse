@extends('layouts.master')
 
@section('sidebar')
     @parent
     
@stop
 
@section('content')
        {{ HTML::link('usuarios', 'volver'); }}
        <h1>
  			Crear Usuario
		</h1>
		
        {{ Form::open(array('url' => 'registro')) }}
        
        {{ Form::label('nombre', 'Nombre'); }}
        {{ Form::text('nombre'); }}
        <br/>
        {{ Form::label('apellido', 'Apellido'); }}
        {{ Form::text('apellido'); }}
        <br/>
        {{ Form::label('correo', 'Correo'); }}
        {{ Form::text('correo'); }}
        <br/>
        {{ Form::label('password', 'Clave'); }} 
        {{ Form::password('password'); }}
        <br/>
        {{ Form::submit('Registrar'); }}
     
    {{ Form::close() }}
@stop