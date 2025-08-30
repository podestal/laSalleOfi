@extends('layouts.Menu')
@section('title', 'Profesional Tecnico en Técnica en Farmacia')

<link rel="stylesheet" type="text/css" href="{{ asset('css/carrerasCss/carrera.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')
<section>
	<div class="main-carrera">
		<div class="container full">
			<div class="item s-100 main-carrera__banner">

				<!-- VIDEO a pantalla completa dentro del banner -->
				<video autoplay loop muted playsinline class="sede-video">
					<source src="{{ asset('videos/VideoFarmacia.mp4') }}" type="video/mp4">
					Tu navegador no admite la reproducción de videos.
				</video>

				<!-- Contenido por encima del video -->
				<div class="main-carrera__banner--content">
					<img src="{{ asset('imgs/carrera-tecnica-de-farmacia.png') }}" alt="">
					<h1>CARRERA: TÉCNICA EN FARMACIA</h1>
					<p><em>(Decreto Supremo No. 004-2010-ED y Resolución Directoral No. 0411-2010-ED)</em></p>
				</div>

			</div>



		</div>
		<div class="container full">	
			<div class="item container full s-100 main-carrera__content">
				<div class="item s-100 m-50 main-carrera__content--description">
					<!--<h2>FARMACIA</h2>-->
					<h2 class="h2">Descripción</h2>
					<div>
						<p>Con tu formación en la Carrera de Técnico en Farmacia recibirás los conocimientos científicos para contribuir directamente con la labor del Químico Farmacéutico.</p>
						<p>Como egresado podrás manejar establecimientos farmacéuticos, preparar recetas magistrales según indicación médica, así como ejecución de acciones preventiva y promocional de salud.</p>					</div>
				</div>
				<div class="item s-100 m-50 main-carrera__content--competencias">
					<h2 class="h2">Competencias</h2>
					<div>
						<p>El profesional Egresado estará en la capacidad de administrar adecuadamente un establecimiento farmacéutico, vender productos farmacéuticos y afines, resolver consultas básicas realizadas por los pacientes, preparar recetas magistrales de medicamentos y afines bajo supervisión, tomando en cuenta las normas de  calidad, seguridad, salud y ética profesional, así también podrá tomar acciones preventivas y promocionales de la salud contribuyendo con su comunidad.</p>					</div>
				</div>
			</div>
			<div class="item container full s-100 main-carrera__parrafo">
				<div class="item s-100 m-50 main-carrera__parrafo--content">
					<h2 class="h2">¿Qué hace un egresado?</h2>
					<div>
						<ol>
							<li>Formar parte del equipo de profesionales de la salud en hospitales y clínicas públicas y privadas.</li>
							<li>Formar parte del equipo de venta y/o administración de establecimientos farmacéuticos y afines. Preparación de medicamentos y afines de acuerdo a receta médica y con la supervisión de un Químico Farmacéutico.</li>
							<li>Tomar acciones preventivas y promocionales de la salud contribuyendo con la salud de las personas en tu comunidad.</li>
							<li>Otros pertinentes al campo de acción y bajo las normas éticas del profesional.</li>
						</ol>					
					</div>
				</div>
				<div class="item s-100 m-50 main-carrera__parrafo--img">
					<img src="{{ asset('imgs/farmacia.jpeg') }}" alt="CARRERA TECNICA DE FARMACIA">
				</div>
			</div>
		</div>
		<div class="container main-carrera__turnos">
			<div class="item s-100 m-50 main-carrera__turnos--duracion">
				<h2 class="h2">Duración </h2>
				<p>06 Semestres Académicos haciendo un total de 03 Años</p>
			</div>
			<div class="item s-100 m-50 main-carrera__turnos--turno">
				<h2 class="h2">Turnos </h2>
				<div>
					<ul><li>Turno Mañana: 08:00 a 11:40</li><li>Turno Tarde: 01:30pm a 05:10pm</li></ul>				</div>
			</div>
			<div class="item s-100 main-carrera__turnos--clases">
				<p>Las clases las realizarás en nuestras instalaciones Jr. San Martin 868 Juliaca</p>
			</div>
		</div>
	</div>
</section>

<section class="main-sillabus">
	<div class="container">
		<div class="item s-100 main-sillabus__title"><h2>MALLA CURRICULAR</h2></div>
		<div class="item s-100 main-sillabus__subtitle">
			<h3>MF N° 1 ATENCIÓN DE URGENCIAS Y ADMINIXTRACIÓN DE UNA OFICINA FARMACÉUTICA</h3>
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE I</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>ANATOMÍA Y FISIOLOGÍA</td></tr>
					<tr><td>PREVENCIÓN EN SALUD</td></tr>
					<tr><td>PRIMEROS AUXILIOS INYECTABLES</td></tr>
					<tr><td>QUÍMICA</td></tr>
					<tr><td>MATEMÁTICA</td></tr>
					<tr><td>DESARROLLO PERSONAL</td></tr>
					<tr><td>TECNOLOGÍA DE LA INFORMACIÓN</td></tr>
				</tbody>
			</table>
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE II</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>LEGISLACIÓN FARMACÉUTICA</td></tr>
					<tr><td>FASES DE LA ADMINISTRACIÓN FARMACÉUTICA</td></tr>
					<tr><td>ATENCIÓN AL CLIENTE</td></tr>
					<tr><td>MICROBIOLOGÍA</td></tr>
					<tr><td>PRODUCCIÓN Y COMPRENSIÓN DE TEXTOS</td></tr>
					<tr><td>ESTADÍSTICA BÁSICA</td></tr>
				</tbody>
			</table>
		</div>
		<div class="item s-100">
			<h3 class="main-sillabus__subtitle">MF N° 2 ADMINISTRACIÓN Y EXPENDIO DE MEDICAMENTOS</h3>	
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE III</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>BUENAS PRÁCTICAS EN ALMACENAMIENTO</td></tr>
					<tr><td>VENTA Y EXPENDIO DE MEDICAMENTOS Y PRODUCTOS AFINES</td></tr>
					<tr><td>APLICACIONES DE BASES FARMACOLÓGICAS</td></tr>
					<tr><td>BIOQUÍMICA</td></tr>
					<tr><td>POLÍTICA NACIONAL DE SALUD Y MEDICAMENTOS</td></tr>
					<tr><td>INGLÉS</td></tr>
					<tr><td>&nbsp;</td></tr>
				</tbody>
			</table>
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE IV</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>ADMINISTRACIÓN FARMACÉUTICA</td></tr>
					<tr><td>ENFERMEDADES Y SU TRATAMIENTO FARMACOLÓGICO</td></tr>
					<tr><td>TÉCNICAS DE VENTAS</td></tr>
					<tr><td>PETITORIO NACIONAL DE MEDICAMENTOS</td></tr>
					<tr><td>TERMINOLOGÍA PROFESIONAL EN INGLÉS</td></tr>
				</tbody>
			</table>
		</div>
		<div class="item s-100">
			<h3 class="main-sillabus__subtitle">MF N° 3 ELABORACIÓN Y COMERCIALIZACIÓN DE PRODUCTOS FARMACEÚTICOS</h3>	
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE V</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>TRANSFORMACIÓN DE MATERIAS PRIMAS</td></tr>
					<tr><td>PREPARADOS GALÉNICOS</td></tr>
					<tr><td>TÉCNICAS DE CONTROL DE CALIDAD</td></tr>
					<tr><td>PRODUCTOS NATURALES, COSMÉTICOS Y AFINES</td></tr>
					<tr><td>VENTA Y DISPENSACIÓN DE PRODUCTOS NATURALES</td></tr>
					<tr><td>METODOLOGÍAS INNOVADORAS</td></tr>
					<tr><td>&nbsp;</td></tr>
				</tbody>
			</table>
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE VI</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>DOCUMENTACIÓN EN UNA OFICINA FARMACÉUTICA</td></tr>
					<tr><td>MANEJO, CONTROL E INVENTARIO DE EQUIPOS, MATERIALES E INSUMOS FARMACOTÉCNICOS</td></tr>
					<tr><td>ENFERMEDADES Y SU TRATAMIENTO FARMACOLÓGICO II</td></tr>
					<tr><td>ÉTICA Y LIDERAZGO PROFESIONAL</td></tr>
					<tr><td>&nbsp;</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</section>


@endsection