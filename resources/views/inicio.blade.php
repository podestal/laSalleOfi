@extends('layouts.Menu')

@section('title', 'Instituto de Educación Superior San Juan Bautista la Salle')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
<link rel="stylesheet" href="{{asset('css/inicio.css')}}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">


@section('content')
<section class="main-banner">
    <div class="container full">
        <div class="item no-padding">
            <div id="layout">
                <span class="trs next"></span>
                <span class="trs prev"></span>
                <div id="slider">
                    <!-- Slides -->
                    <div class="slide slide3 trs" data-caption="Lorem ipsum dolor 3">
                        <img src="{{asset('imgs/carrera-tecnica-de-farmacia-sjb-la-salle-juliaca.jpg')}}" 
                             alt="Carrera Tecnica Profesional de Farmacia" sizes="">
                        <div class="main-banner__data">
                            <h2>FARMACIA</h2><br>
                            <h4>Profesional Técnico en Farmacia</h4>
                            <a href="{{route('farmacia')}}" class="btn btn-red">VER CARRERA</a>
                        </div>	
                    </div>
                    <div class="slide slide3 trs" data-caption="Lorem ipsum dolor 3">
                        <img src="{{asset('imgs/enfermeria-tecnica.jpg')}}" 
                             alt="Carrera Tecnica Profesional" sizes="">
                        <div class="main-banner__data">
                            <h2>ENFERMERIA TECNICA</h2><br>
                            <h4>Profesional Técnico en Enfermería</h4>
                            <a href="{{route('enfermeria')}}" class="btn btn-red">VER CARRERA</a>
                        </div>
                    </div>
                    <div class="slide slide3 trs" data-caption="Lorem ipsum dolor 3">
                        <img src="{{asset('imgs/optometria.jpg')}}" 
                             alt="Carrera Tecnica Profesional" sizes="">
                        <div class="main-banner__data">
                            <h2>OPTOMETRIA</h2><br>
                            <h4>Profesional Técnico en Optometría</h4>
                            <a href="{{route('optometria')}}" class="btn btn-red">VER CARRERA</a>
                        </div>
                    </div>
                    <div class="slide slide2 trs" data-caption="Lorem ipsum dolor 2">
                        <img src="{{asset('imgs/carrera-tecnica-de-fisioterapia-y-rehabilitacion-sjb-la-salle-juliaca.jpg')}}" 
                             alt="Carrera Tecnica Profesional de Fisioterapia y Rehabilitacion" sizes="">
                        <div class="main-banner__data">
                            <h2>FISIOTERAPIA Y REHABILITACIÓN</h2><br>
                            <h4>Profesional Técnico en Fisioterapia y Rehabilitación</h4>
                            <a href="{{route('fisioterapiayRehabilitacion')}}" class="btn btn-red">VER CARRERA</a>
                        </div>
                    </div>
                    <div class="slide slide3 trs ativo" data-caption="Lorem ipsum dolor 1">
                        <img src="{{asset('imgs/carrera-tecnica-de-protesis-dental-sjb-la-salle-juliaca.jpg')}}" 
                             alt="Carrera Tecnica Profesional de Protesis Dental" sizes="">
                        <div class="main-banner__data">
                            <h2>PROTESIS DENTAL</h2><br>
                            <h4>Profesional Técnico en Protesis Dental</h4>
                            <a href="{{route('protesisDental')}}" class="btn btn-red">VER CARRERA</a>
                        </div>
                    </div>
                    
                    <!--<div class="slide slide3 trs ativo" data-caption="Lorem ipsum dolor 3">
                        <img src="{{asset('imgs/entrenamiento-deportivo.jpg')}}" 
                             alt="Carrera Tecnica Profesional" sizes="">
                        <div class="main-banner__data">
                            <h2>ENTRENAMIENTO DEPORTIVO</h2><br>
                            <h4>Profesional Técnico</h4>
                            <a href="{{route('entrenamientoDeportivo')}}" class="btn btn-red">VER CARRERA</a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>

    <script>document.addEventListener('DOMContentLoaded', function() {
        const slider = document.getElementById('slider');
        const slides = slider.querySelectorAll('.slide');
        let currentSlide = 0;
        const autoInterval = 3000; // Intervalo en milisegundos para el cambio automático
    
        // Botones de control
        const nextBtn = document.querySelector('.next');
        const prevBtn = document.querySelector('.prev');
    
        // Función para cambiar la diapositiva
        const changeSlide = () => {
            slides[currentSlide].classList.remove('ativo');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('ativo');
        };
    
        // Iniciar el cambio automático
        const autoChange = setInterval(changeSlide, autoInterval);
    
        // Manejar el clic en el botón "Siguiente"
        nextBtn.addEventListener('click', () => {
            clearInterval(autoChange); // Detener el cambio automático
            slides[currentSlide].classList.add('next-slide');
            setTimeout(() => {
                slides[currentSlide].classList.remove('ativo', 'next-slide');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add('ativo');
            }, 200); // Tiempo para la transición
        });
    
        // Manejar el clic en el botón "Anterior"
        prevBtn.addEventListener('click', () => {
            clearInterval(autoChange); // Detener el cambio automático
            slides[currentSlide].classList.add('prev-slide');
            setTimeout(() => {
                slides[currentSlide].classList.remove('ativo', 'prev-slide');
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                slides[currentSlide].classList.add('ativo');
            }, 200); // Tiempo para la transición
        });
    });</script>

</section>

<section>
	<!-- SEGUNDO DIV DE LA INFORMACION DE LAS CARRERAS" -->
	<div class="row bloqueapp2 appear-animation animated fadeInLeft appear-animation-visible" data-appear-animation="fadeInLeft" data-appear-animation-delay="4">
		<div class="overlay-container">
			<h2 class="titulo_cifra1"><strong>SAN JUAN BAUTISTA LA SALLE </strong>EN CIFRAS</h2>
			<div class="container">
				<div class="view view-cifras view-id-cifras view-display-id-block_1 js-view-dom-id-b16a8109dde29c02a68916edbb21bfbc00bda983835a37cf2089df4f8b1a3c93">
					<!-- Contenido del div "container" -->
					<div class="view-content">
						<div class="views-row">
							<div class="col-md-2 col-sm-6">
								<div class="caja_cifra">
									<div class="titulo_cifra contenido_cifra">
										<p>Fundada el</p>
										<br>
									</div>
									<div class="cantidad">
										<img src="imgs/edificio.png" alt="Imagen de la fundación" style="width: 60px; margin-top: -15%;">
										<br>
										30 de Noviembre del 2004
									</div>
								</div>
							</div>
						</div>
						<div class="views-row">
							<div class="col-md-2 col-sm-6">
								<div class="caja_cifra">
									<div class="titulo_cifra contenido_cifra">
										<p>Contamos con 5</p>
										<br>
									</div>
									<div class="cantidad">
										<img src="imgs/educacion.png" alt="Imagen de la fundación" style="width: 60px; margin-top: -15%;">
										<br>
										Carreras
									</div>
								</div>
							</div>
						</div>
						<div class="views-row">
							<div class="col-md-2 col-sm-6">
								<div class="caja_cifra">
									<div class="titulo_cifra contenido_cifra">
										<p>Estudiantes Matriculados</p>
										<br>
									</div>
									<div class="cantidad">
										<img src="imgs/estudiantes.png" alt="Imagen de la fundación" style="width: 60px; margin-top: -15%;">
										<br>
										683
									</div>
								</div>
							</div>
						</div>
						<div class="views-row">
							<div class="col-md-2 col-sm-6">
								<div class="caja_cifra">
									<div class="titulo_cifra contenido_cifra">
										<p style="font-size: 18px;">Investigadores y Administradores</p>
										<br>
									</div>
									<div class="cantidad">
										<img src="imgs/administradores.png" alt="Imagen de la fundación" style="width: 70px; margin-top: -15%;">
										<br>
										50
									</div>
								</div>
							</div>
						</div>
					</div> 
				</div> 
			</div>
		</div> 
	</div> 
	

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const cajasCifra = document.querySelectorAll('.caja_cifra');
	
			cajasCifra.forEach(caja => {
				caja.style.backgroundColor = '#87CEEB'; // Color celeste inicial con opacidad
	
				caja.addEventListener('mouseover', function() {
					caja.style.backgroundColor = '#1E90FF'; // Cambiar a un tono de azul menos intenso al pasar el mouse
				});
	
				caja.addEventListener('mouseleave', function() {
					caja.style.backgroundColor = '#87CEEB'; // Restaurar el color celeste inicial al quitar el mouse
				});
			});
		});
	</script>
</section>

<section>
	<div class="ed-container full division ">
		<div class="ed-item main-division abcenter flex-column ">
			<h2 class="main-division__title ">Máxima calidad para tu formación profesional</h2>
		</div>
	</div>
</section>

<!----------------------------------------------------------------------------------------------------------------- -->
<section class="main-product">
    <div class="container">
        <div class="item s-100 m-1-3">
            <div class="product">
                <div class="product-item">
                    <div class="product-item__contenedor--img">
                        <a href="{{route('farmacia')}}">
                            <img src="imgs/carrera-tecnica-de-farmacia.png" alt=" " class="product-item__img">
                        </a>
                    </div>
                </div>
            </div>
            <h2 class="main-product__title">FARMACIA</h2>
        </div>

        <div class="item s-100 m-1-3">
            <div class="product">
                <div class="product-item">
                    <div class="product-item__contenedor--img">
                        <a href="{{route('fisioterapiayRehabilitacion')}}">
                            <img src="imgs/fisioterapia-y-rehabilitacion.png" alt=" " class="product-item__img">
                        </a>
                    </div>
                </div>
            </div>
            <h2 class="main-product__title">FISIOTERAPIA Y REHABILITACIÓN</h2>
        </div>

        <!--<div class="item s-100 m-1-3">
            <div class="product">
                <div class="product-item">
                    <div class="product-item__contenedor--img">
                        <a href="{{route('entrenamientoDeportivo')}}">
                            <img src="imgs/entrenamiento-deportivo.png" alt=" " class="product-item__img">
                        </a>
                    </div>
                </div>
            </div>
            <h2 class="main-product__title">ENTRENAMIENTO DEPORTIVO</h2>
        </div>-->

        <div class="item s-100 m-1-3">
            <div class="product">
                <div class="product-item">
                    <div class="product-item__contenedor--img">
                        <a href="{{route('protesisDental')}}">
                            <img src="imgs/carrera-tecnica-de-protesis-dental.png" alt=" " class="product-item__img">
                        </a>
                    </div>
                </div>
            </div>
            <h2 class="main-product__title">PROTESIS DENTAL</h2>
        </div>

        <div class="item s-100 m-1-3">
            <div class="product">
                <div class="product-item">
                    <div class="product-item__contenedor--img">
                        <a href="{{route('optometria')}}">
                            <img src="imgs/imagen-de-optometria.png" alt=" " class="product-item__img">
                        </a>
                    </div>
                </div>
            </div>
            <h2 class="main-product__title">OPTOMETRIA</h2>
        </div>

        <div class="item s-100 m-1-3">
            <div class="product">
                <div class="product-item">
                    <div class="product-item__contenedor--img">
                        <a href="{{route('enfermeria')}}">
                            <img src="imgs/carrera-tecnica-enfermeria.png" alt=" " class="product-item__img">
                        </a>
                    </div>
                </div>
            </div>
            <h2 class="main-product__title">ENFERMERIA TECNICA</h2>
        </div>
    </div>
</section>

<section class="main-features">
    <div class="container full">
        <div class="item container main-features1 s-100 l-50">
            <div class="item s-100">
                <h2 class="main-features__title">BENEFICIOS</h2>
            </div>

            <div class="item features-item s-100 l-25">
                <div class="features-item__img">
                    <i class="fa fa-award"></i>
                </div>
                <p class="features-item__title">Calidad Académica</p>
            </div>

            <div class="item features-item s-100 l-45">
                <div class="features-item__img">
                    <i class="fa fa-handshake"></i>
                </div>
                <p class="features-item__title">Convenios Institucionales</p>
            </div>

            <div class="item features-item s-100 l-20">
                <div class="features-item__img">
                    <i class="fa fa-briefcase"></i>
                </div>
                <p class="features-item__title">Alta empleabilidad</p>
            </div>
        </div>

        <div class="item container main-features2 s-100 l-50">
            <div class="item s-100">
                <h2 class="main-features__title">CONTAMOS CON:</h2>
            </div>

            <div class="item features-item s-100 l-30">
                <div class="features-item__img">
                    <i class="fa fa-building"></i>
                </div>
                <p class="features-item__title">Infraestructura</p>
            </div>

            <div class="item features-item s-100 l-35">
                <div class="features-item__img">
                    <i class="fa fa-users"></i>
                </div>
                <p class="features-item__title">Equipo Docente</p>
            </div>

            <div class="item features-item s-100 m-1-3">
                <div class="features-item__img">
                    <i class="fa fa-user-tie"></i>
                </div>
                <p class="features-item__title">Concejeria Académica</p>
            </div>
        </div>


    </div>
</section>

<section class="section-instituto">
    <h2 class="title-main">Beneficios de estudiar en nuestra sede</h2>
    <div class="cards-container">
        <div class="card carrera-card">
            <h3>Ubicación estratégica</h3>
            <!-- Imagen o contenido adicional aquí -->
        </div>
        <div class="card cursos-card">
            <h3>Ambiente de aprendizaje tranquilo, seguro y motivador.</h3>
            <!-- Imagen o contenido adicional aquí -->
        </div>
        <div class="card idiomas-card">
            <h3>Recursos educativos modernos, incluyendo laboratorios.</h3>
            <!-- Imagen o contenido adicional aquí -->
        </div>
    </div>
</section>


<section>
    <div class="sede-description">
        <h2>Nuestra Sede</h2>
        <h3>Jr. San Martin 868 Juliaca</h3>
        <video autoplay loop muted class="sede-video">
            <source src="{{ asset('videos/salle.mp4') }}" type="video/mp4">
            Tu navegador no admite la reproducción de videos.
        </video>
    </div>
</section>

<style>
    .sede-video {
    width: 100%;
    height: auto;          
    max-height: 60vh;      
    object-fit: cover;   
    border-radius: 0;
    display: block;
    margin: 0 auto;
}

</style>

<section class="main-notices">
    <div class="item s-100">
        <h2 class="main-notices__title">PUBLICACIONES</h2>
    </div>

    <div class="container">
        <div class="item container s-100 m-50 l-25">
            <div class="notices-item">
                <div class="item s-100 main-notices__img">
                    <a href="">
                        <img src="imgs/IMG-20190314-WA0005.jpg" alt="razones para estudiar una carrera tecnica">
                    </a>
                </div>
                <div class="item s-100 main-notices__content">
                    <div>
                        <span>INSTITUTO</span>
                        <h3 class="notices-item__title">
                            <a>
                                7 Razones por las que deberías estudiar una Carrera Técnica
                            </a>
                        </h3>
                        <p class="notices-item__description"></p>
                        <p>Escoger una carrera en el campo de la salud es una decisión importante, no sólo por...
                            <a href="{{ route('razones') }}">Leer más</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="item container s-100 m-50 l-25">
            <div class="notices-item">
                <div class="item s-100 main-notices__img">
                    <a href="">
                        <img src="imgs/open-day-instituto-san-juan-bautista-la-salle-juliaca1.jpg" alt="Open Day 2019">
                    </a>
                </div>
                <div class="item s-100 main-notices__content">
                    <div>
                        <span>INSTITUTO</span>
                        <h3 class="notices-item__title">
                            <a>
                                Open Day 2019 - San Juan Bautista La Salle
                            </a>
                        </h3>
                        <p class="notices-item__description"></p>
                        <p>El primer Open Day de nuestra historia fue un éxito. Eran las 4:00pm y todo el equipo se s...
                            <a href="{{ route('OpenDaysalle') }}">Leer más</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="item container s-100 m-50 l-25">
            <div class="notices-item">
                <div class="item s-100 main-notices__img">
                    <a href="">
                        <img src="imgs/carrera-tecnica-de-farmacia-sjb-la-salle-juliaca21.jpg" alt="Ingredientes inactivos de fármacos">
                    </a>
                </div>
                <div class="item s-100 main-notices__content">
                    <div>
                        <span>FARMACIA</span>
                        <h3 class="notices-item__title">
                            <a>
                                Ingredientes inactivos de fármacos también tienen efectos
                            </a>
                        </h3>
                        <p class="notices-item__description"></p>
                        <p>Cuando pensamos en un medicamento solemos recordar el principio activo que lo hace valioso para t...
                            <a href="{{ route('IngredientesInactivos') }}">Leer más</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection 
