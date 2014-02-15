@extends('layouts.master')


@section('content')
    <h2>
      Entrar
      
    </h2>
    @if (Session::has('mensaje_login'))
        <span>{{ Session::get('mensaje_login') }}</span>
    @endif
     
    {{ Form::open(array('url' => 'login')) }}
        
        {{ Form::label('correo', 'Correo'); }}
        {{ Form::text('correo'); }}
        {{ Form::label('password', 'Clave'); }} 
        {{ Form::password('password'); }}
        {{ Form::submit('Ingresar'); }}
     
    {{ Form::close() }}
     
    <h2>
      Aun no eres usuario? Regístrate aquí!
      
    </h2>
    @if (Session::has('mensaje_registro'))
        <span>{{ Session::get('mensaje_registro') }}</span>
    @endif
     
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