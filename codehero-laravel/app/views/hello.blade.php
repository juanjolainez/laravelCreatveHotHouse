@extends('layouts.master')

@header
	@parent
@stop

@section('sidebar')
<style>
	body
	{
		background-image:url('img/pattern.jpeg');
		background-repeat:true;
	}
</style>
<script src="holder.js"></script>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
	
	<div class="carousel-inner">
		<div class="item active">
			<img data-src="holder.js/900x500/auto/#777:#7a7a7a" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+"/>
			<div class="container">
				<div class="carousel-caption">
					<img src= "img/flower.png" />
					<h1>Creative HotHouse Laravel Project.</h1>
					<p>
					This is a simple WebPage with user login and other back-end functionalities using Laravel MVC
					framework and Bootstrap.
					</p>
					<p>
					<a class="btn btn-lg btn-primary" href="login" role="button">Sign up today</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@stop