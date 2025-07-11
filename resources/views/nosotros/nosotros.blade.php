@extends('layouts.Menu')
@section('title', 'Trabaje con nosotros | Instituto San Juan Bautista La Salle')

<link rel="stylesheet" type="text/css" href="{{ asset('css/nosotros.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')
<main><div class="container full main-about header">
	<div class="item s-100 m-100 header__banner">
		<img src="{{ asset('imgs/header-instituto-san-juan-bautista-la-salle-juliaca.jpg') }}" alt="" class="main-contact__img">
		<div class="header__title">
			<h1>Acerca de nosotros</h1>
			<p>Conoce más acerca de lo que hacemos para ustedes</p>
		</div>
	</div>
	<div class="item container s-100 main-about__content">
		<div class="item s-100">
			<h2 class="main-about__title h1">Reseña de nuestra institución</h2>
		</div>
		<div class="item s-100 m-50 main-about__item">
			<p class="main-about__parrafo">El Instituto de Educación Superior Privado “SAN JUAN BAUTISTA LA SALLE”, fue autorizado por Resolución Ministerial Nº0616-2004-ED. el 30 de noviembre de 2004 y tiene autorización en su oferta educativa técnico profesional.</p>
			<p class="main-about__parrafo">Su fundación nace para brindar una alternativa de estudios superiores para los jóvenes de la región sur de nuestro país.</p>
			<p class="main-about__parrafo">Hoy, con más de 10 años de experiencia, hemos formado cientos de alumnos y contamos con 16 promociones en las carreras profesionales que ofrecemos como:</p>
			<ul class="main-about__list">
				<li>Farmacia</li>
				<li>Prótesis dental</li>
				<li>Fisioterapia y Rehabilitación</li>
				<li>Enfermeria Tecnica</li>
				<li>Optometria</li>

			</ul>
			<p class="main-about__parrafo">Desde el momento de nuestra fundación hemos brindado a nuestros alumnos una formación Técnica de alto nivel, que se adapta a las exigencias del mundo laboral actual, priorizando siempre la mejora constante como Institución Educativa.</p>
		</div>
		<div class="item s-100 m-50">
			<img class="main-about__img" src="imgs/vision-mision-instituto-san-juan-bautista-la-salle-juliaca-puno.JPG" alt="">
		</div>
		<div class="item s-100 m-50">
			<img class="main-about__img" src="imgs/profesionales-tecnicos-del-instituto-san-juan-bautista-la-salle-juliaca-puno.JPG" alt="">
		</div>
		<div class="item s-100 m-50 main-about__item">
			<h2 class="main-about__subtitle">MISIÓN</h2>
			<p class="main-about__parrafo">Formar hombres y mujeres buenos y sabios que respondan a las innovaciones que se desarrollan en nuestro país, con la participación creativa de todos los que conforman el Instituto San Juan Bautista la Salle.</p>
			<h2 class="main-about__subtitle">VISIÓN</h2>
			<p class="main-about__parrafo">Ser una institución con mira a la acreditación, solidaria relacionada con su entorno local, nacional e internacional congruente con los avances científicos y tecnológicos para impulsar el desarrollo de nuestra región y país.</p>
		</div>

		<div class="item s-100">
			<h2 class="main-about__title h1">Nuestro valores</h2>
		</div>
		<div class="item s-100 m-50 main-about__item">
			<ul class="main-about__list">
				<li><strong>Responsabilidad:</strong>Conscientes de efectuar nuestras obligaciones con profesionalismo y calidad.</li>
				<p></p>
				<li><strong>Respeto:</strong>Es un valor que permite reconocer, aceptar, apreciar y valorar las cualidades del prójimo y sus derechos. Es decir, el respeto es el reconocimiento del valor propio y de los derechos de los individuos y de la sociedad.</li>
			</ul>
		</div>
		<div class="item s-100 m-50">
			<img class="main-about__img" src="imgs/imagen-de-valores.jpg" alt="">
		</div>

		<div class="item s-100 m-50">
			<img class="main-about__img" src="imgs/imagen-de-principios.jpg" alt="">
		</div>
		<div class="item s-100 m-50 main-about__item">
			<h2 class="main-about__subtitle">Principios de la Institución</h2>
			<p class="main-about__parrafo">El Instituto de Educación Superior Privado San Juan Bautista La Salle, tiene como principios de la propuesta pedagógica:</p>
			<ul class="main-about__list">
				<li><strong>Calidad,</strong> La calidad educativa del Instituto San Juan Bautista La Salle se basa en brindar una oferta articulada a la demanda laboral de manera eficiente y eficaz tomando en cuenta el entorno laboral, social, cultural y personal de los beneficiarios de manera inclusiva, asequible y accesible.</li>
				<li><strong>Pertinencia,</strong> Los programas de estudios que oferta el Instituto de Educación Superior San Juan Bautista La Salle se vinculan a la demanda del sector productivo, a las necesidades de desarrollo local y regional, y a las necesidades de servicios a nivel local, regional, nacional e internacional.</li>
				<li><strong>Flexibilidad,</strong> El Instituto podrá reconocer estudios de las personas del mundo educativo y del trabajo, así como la permeabilidad con los cambios del entorno social. </li>
				<li><strong>Inclusión social,</strong> La Institución acoge a todas las personas, sin discriminación, accediendo a servicios de calidad, de manera que los factores culturales, económicos, sociales, étnicos y geográficos se constituyan en facilitadores para el acceso a la educación superior.</li>
				<li><strong>Transparencia,</strong> El Instituto cuenta con un sistema de información actualizada accesible, transparente, ágil y actualizada que faciliten la toma de decisión en las distintas instancias y que permitan el desarrollo de actividades de manera informada y orientada a los procesos de mejora continua, tanto a nivel institucional como a nivel de la oferta.</li>
				<li><strong>Mérito, </strong> Busca el reconocimiento de los logros mediante mecanismos transparentes que permitan el desarrollo personal y profesional.</li>
			</ul>
		</div>
	</div>
</div></main>
@endsection