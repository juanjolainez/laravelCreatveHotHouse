@extends('layouts.master')

@section('sidebar')
	@parent
	
@stop

@section('content')

	<h1>Read article: {{$articulo->title}}</h1>
	<input type="hidden" id="articuloID" value="{{$articulo->id}}"/>
	<input type="hidden" id="userID" value="{{Auth::user()->id}}"/>
	<input type="hidden" id="userNombre" value="{{Auth::user()->nombre}}"/>

	{{HTML::link('usuarios', 'Volver');}}

	<h2> 
		{{$articulo->title}}
	</h2>

	{{$articulo->text}}

	<br/> <br/>
	More articles from {{HTML::link('usuarios/'.$usuario->id, $usuario->nombre);}}


	<section id='comments'>

		<h3> Comments </h3>


		@foreach ($comments as $comment)
			<br>
			<article>
				<p> Comentario de: {{HTML::link('usuarios/'.$comment->usuario->id,$comment->usuario->nombre);}} </p>
				<p> 	{{$comment->text}} </p>
			<article>
		@endforeach

		
	</section>
	<br/>
	<br/>
	<section>
		<h4> Add comment </h4>
		<p>You are submitting a comment as: {{Auth::user()->nombre}}</p>
		<textarea rows="4" cols="50" id="comment" placeholder="Write here your comment"></textarea>
		<br/>
		<button onclick="myFunction()">AddComment</button>
	

	</section>
	<br/>
	<br/>
	<script>
		function myFunction()
		{
			var mensaje = $("#comment").val();
			var articuloID = $('#articuloID').val();
			var userID = $('#userID').val();
			var userNombre = $('#userNombre').val();
			$.ajax({
				type: "POST",
				url: "/codehero-laravel/public/coments/crear",
				data: {text: mensaje, articulo_id: articuloID, usuario_id: userID},
				success: function(result) {
					var texto = "<article> <p> Comentario de:";
					texto = texto + '<a href="http://localhost/codehero-laravel/public/usuarios/'+userID+'">'+userNombre+'</a>';
					texto = texto + '<p>'+mensaje+'</p>';
	                $('#comments').append(texto);
	            }
		
			});
		}
	</script>

@stop