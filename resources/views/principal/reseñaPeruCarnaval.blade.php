@extends('layouts.principalWeb')

@section('banner')
<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url({{ url('carnaval/images/bg/reseña.png') }});">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Perú en el<br> <b>Carnaval</b></h1>

			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
@endsection

@section('content')
<div id="fh5co-contact" style="background-image: url({{ url('carnaval/images/bg/st-2.png') }});">
		<div class="container text-justify">
			  <div class="row" >
				<div class="col-md-6  animate-box"  ><br><br><br>
					<img class="img-responsive img-thumbnail- bounce-in hvr-ripple-out" src="{{ url('carnaval/images/pag/resena_peru/resena.png') }}">

				</div>
				<div class="col-md-6 animate-box">

					<h2><img src="{{url('carnaval/images/text/reseña.png')}}" class="img-responsive shake-slow" width="200px" height="205px"></h2>
					<p>Seducida por su arte, danzas, trajes típicos, fiestas locales y religiosas, la escuela de samba Unidos de Vila María eligió representar al Perú en el Carnaval São Paulo 2019.</p>
					<p>Se trata de la primera vez que el Perú estará ante los ojos del mundo y tendrá presencia en la fiesta más popular y famosa del planeta.</p>
					<p>Lo más memorable de la identidad, cultura y tradición del Perú se presentará en el Carnaval de São Paulo, y cautivará a millones de personas.</p>
					<p>Más de 800 millones de personas en más de 140 países de los cinco continentes quedarán cautivados ante la majestuosidad de la cultura peruana
Durante dos días, gigantescos carros alegóricos, y miles de artistas en batallones de baile con majestuosos trajes recorrerán el sambódromo de Anhembi.</p>
<p>
Perú en el Carnaval cuenta con el respaldo de PromPerú y la autorización de marca Perú.</p>



				</div>
			</div>


		</div>

	</div>
@endsection