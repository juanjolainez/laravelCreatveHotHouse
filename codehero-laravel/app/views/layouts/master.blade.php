<html>
	
	<header>
		<title> First Bootstrap & Laravel APP </title>
		
		@section('header')
			{{HTML::style('css/bootstrap.min.css')}}
			{{HTML::style('css/carousel.css')}}

			

			<div class="navbar-wrapper">
				<div class="container">
					<div class="navbar navbar-inverse navbar-static-top" role="navigation">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"/>
								<span class="icon-bar"/>
								<span class="icon-bar"/>
								</button>
								<a class="navbar-brand" href="#">Creative HotHouse Portfolio</a>
							</div>
								<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav">
									<li class="active">
										<a href="#">Home</a>
									</li>
									<li>
										<a href="#about">About</a>
									</li>
									<li>
										<a href="#contact">Contact</a>
									</li>
									@if (Auth::check()) 
										<li class="texto" style="color:#ffffff;">
											<a hrelf="#" style=>Bienvenido {{Auth::user()->nombre}}</a>
										</li>
										<li>
											{{ HTML::link('logout', 'Logout'); }}
										</li>
									@endif
									<li class="dropdown">
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		@show
		<br/>
		@section('sidebar')
			
		@show
	</header>
	<body style="">
		

		<div class='container'>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		    <!-- Include all compiled plugins (below), or include individual files as needed -->
		    <script src="js/bootstrap.min.js"></script>
			@yield('content')
		<div>
	</body>
</html>