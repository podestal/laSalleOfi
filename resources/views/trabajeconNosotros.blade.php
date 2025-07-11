@extends('layouts.Menu')
@section('title', 'Trabaje con nosotros | Instituto San Juan Bautista La Salle')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

<link rel="stylesheet" type="text/css" href="{{ asset('css/trabajeConNosotros.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">


@section('content')
<section class="main-work">
	<div class="container full header">
		<div class="item s-100 header__banner">
			<img src=" {{asset('imgs/header-instituto-san-juan-bautista-la-salle-juliaca.jpg')}}" alt="">
			<div class="header__title">
				<h1>Trabaje con nosotros</h1>
				<p>Te invitamos a formar parte de nuestra plana docente</p>
			</div>
		</div>
		<div class="container s-100 item main-form">
			<div class="item container s-100 m-60 main-form__formulario">
				<div class="item s-100">
					<h2 class="main-form__formulario--subtitle1">Postula como docente</h2>
				</div>
				<div class="item s-80 main-contact__form">
					<form action="{{ route('trabajeconNosotros.enviar') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<label for="txtNamesWork">Nombre Completo:</label><br>
						<input type="text" id="txtNamesWork" name="txtNamesWork" title="Nombres" required=""><br>
						@error('txtNamesWork')
    					<span style="color:red;">{{ $message }}</span>
						@enderror
				
						<label for="txtEmailWork">Correo Electrónico:</label><br>
						<input type="email" id="txtEmailWork" name="txtEmailWork" title="Correo Electrónico" required=""><br>
						@error('txtEmailWork')
							<span style="color: red;">{{ $message }}</span><br>
						@enderror
				
						<label for="txtPhoneWork">Celular: </label><br>
						<input type="text" id="txtPhoneWork" name="txtPhoneWork" title="Celular o Teléfono"><br>
						@error('txtPhoneWork')
							<span style="color: red;">{{ $message }}</span><br>
						@enderror
				
						<label for="txtEspecialtyWork">Especialidad:</label><br>
						<input type="text" id="txtEspecialtyWork" name="txtEspecialtyWork" title="Especialidad"><br>
						@error('txtEspecialtyWork')
							<span style="color: red;">{{ $message }}</span><br>
						@enderror
				
						<label for="txtCourseWork">Curso:</label><br>
						<input type="text" id="txtCourseWork" name="txtCourseWork" title="Curso"><br>
						@error('txtCourseWork')
							<span style="color: red;">{{ $message }}</span><br>
						@enderror
				
						<label for="txtFileWork">Cargue su CV en Formato PDF(Peso max. 2MB):</label><br>
						<input type="file" name="txtFileWork" id="txtFileWork" title="CV" required=""><br>
						@error('txtFileWork')
							<span style="color: red;">{{ $message }}</span><br>
						@enderror
				
						<label for="txtDescriptionWork">Breve descripcion de lo genial que es usted:</label><br>
						<textarea name="txtDescriptionWork" id="txtDescriptionWork" cols="20" rows="5" title="Descripcion breve"></textarea><br>
						@error('txtDescriptionWork')
							<span style="color: red;">{{ $message }}</span><br>
						@enderror

						
				
						<button type="submit">Enviar</button>
					</form>
					<div id="mensaje" style="color:#38a63f;padding-bottom: .5em;text-align: center;">
						@if(session('mensaje'))
							{{ session('mensaje') }}
						@endif
					</div>
				</div>
			</div>
			<div class="item s-100 m-40 main-form__contact">
				<h2 class="main-form__contact--subtitle2">Contáctanos y responderemos al instante</h2>
				<ul class="main-form__contact--list">
					<li><i class="fa fa-fw fa-envelope"></i> Correo Electrónico
						<ul>
							<li><i class="fa fa-check"></i> info@sjb-lasalle.edu.pe</li>
						</ul>
					</li>
					<li><i class="fab fa-fw fa-whatsapp"></i> Número de contacto
						<ul>
							<li><i class="fa fa-check"></i>  +51 999 177 023</li>
						</ul>
					</li>
					<li><i class="fa fa-map-marker-alt"></i> Dirección 
						<ul>
							<li><i class="fa fa-check"></i> Jr. San Martin 896 Juliaca</li>
						</ul>
					</li>
					<li><i class="fa fa-clock"></i> Nuestro horario de atención 
						<ul>
							<li><i class="fa fa-check"></i> 08:00 am a 12:00 pm</li>
							<li><i class="fa fa-check"></i> 03:00 pm a 06:00 pm</li>
						</ul>
					</li>
				</ul>
				<img class="main-form__contact--img" src="{{asset('imgs/escudo-instituto-san-juan-bautista-la-salle-juliaca.png')}}" alt="">
			</div>
		</div>
	</div>
</section>
<script src="{{ asset('js/Forms.js') }}"></script>
@endsection