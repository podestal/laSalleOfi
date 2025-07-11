@extends('layouts.Menu')
@section('title', 'Profesional Tecnico en Técnica en Enfermeria')

<link rel="stylesheet" type="text/css" href="{{ asset('css/carrerasCss/carrera.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')
<section>
	<div class="main-carrera">
		<div class="container full">
			<div class="item s-100 main-carrera__banner">

				<!-- Video de fondo -->
				<video autoplay loop muted playsinline class="sede-video">
					<source src="{{ asset('videos/VideoEnfermeria.mp4') }}" type="video/mp4">
					Tu navegador no admite la reproducción de videos.
				</video>

				<!-- Contenido sobre el video -->
				<div class="main-carrera__banner--content">
					<img src="{{ asset('imgs/carrera-tecnica-enfermeria.png') }}" alt="Carrera Técnica en Enfermería">
					<h1>CARRERA: TÉCNICA EN ENFERMERÍA</h1>
					<p><em>(Profesional técnico en Enfermeria)</em></p>
				</div>

			</div>

		</div>
		<div class="container full">	
			<div class="item container full s-100 main-carrera__content">
				<div class="item s-100 m-50 main-carrera__content--description">
					<!--<h2>FARMACIA</h2>-->
					<h2 class="h2">Descripción</h2>
					<div>
						<p>El egresado de la carrera de enfermería técnica del IES San Juan Bautista La Salle, será capaz de
							competir con un exigente mercado laboral a través de una educación de calidad, global, de
							visión emprendedora y con sólidos valores morales; estará capacitado para integrarse al
							equipo de salud, realizando actividades de promoción y prevención de la salud en la
							comunidad, colaborando con los profesionales del área en la ejecución de procedimientos
							básicos de enfermería y en acciones de recuperación y rehabilitación del individuo, familia y
							comunidad y asistiendo en la atención de las necesidades básicas y cuidados integrales de la
							salud de las personas y la comunidad.</p>
											
					</div>
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
					<img src="{{ asset('imgs/Enfermeria-Tecnica-carrera.png') }}" alt="CARRERA TECNICA DE FARMACIA">
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
					<!--<ul><li>Turno Mañana: 08:00 a 11:40</li><li>Turno Tarde: 01:30pm a 05:10pm</li><li>Turno Noche: 05:30pm a 08:45pm</li></ul>-->			</div>
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
			<h3>MF N° 1 ACTIVIDADES EN PROMOCIÓN Y PREVENCIÓN DE LA SALUD</h3>
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE I</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Anatomía Fisiológica</td></tr>
					<tr><td>Terminología y Documentación en Salud</td></tr>
					<tr><td>Fundamentos de Enfermería</td></tr>
					<tr><td>Primeros Auxilios</td></tr>
					<tr><td>Matemática</td></tr>
					<tr><td>Desarrollo Personal</td></tr>
					<tr><td>Tecnología de la Informacion</td></tr>

					
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
					<tr><td>Promoción y Prevención de la Salud</td></tr>
					<tr><td>Epidemiolagía</td></tr>
					<tr><td>Microbiología e Inmunología</td></tr>
					<tr><td>Salud Comunitaria</td></tr>
					<tr><td>Produccion y Comprensión de Textos</td></tr>
					<tr><td>Estadística Básica</td></tr>
					
				</tbody>
			</table>
		</div>
		<div class="item s-100">
			<h3 class="main-sillabus__subtitle">MF N° 2 ASISTENCIA EN ATENCIÓN BÁSICA EN SALUD</h3>	
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE III</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Bioseguridad</td></tr>
					<tr><td>Farmacología</td></tr>
					<tr><td>Asistencia en Medicina Alternativa</td></tr>
					<tr><td>Asistencia Hospitalaria</td></tr>
					<tr><td>Asistencia Quirúrgica</td></tr>
					<tr><td>Inglés Básico</td></tr>
					
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
					<tr><td>Salud Global e Internacional</td></tr>
					<tr><td>Salud Pública</td></tr>
					<tr><td>Nutrición y Salud</td></tr>
					<tr><td>Técnicas de administración de Medicamentos</td></tr>
					<tr><td>Terminología Profesional en Inglés</td></tr>
					<tr><td></td></tr>
					
				</tbody>
			</table>
		</div>
		<div class="item s-100">
			<h3 class="main-sillabus__subtitle">MF N° 3 ASISTIR EN CUIDADO INTEGRALES DE SALUD </h3>	
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE V</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Asistencia en salud Mental</td></tr>
					<tr><td>Asistencia Geriátrica</td></tr>
					<tr><td>Asistencia Materna y del Neonato</td></tr>
					<tr><td>Asistencia en Procedimientos Invasivos y no Invasivos</td></tr>
					<tr><td>Salud del niño y Adolescentes</td></tr>
					<tr><td>Metodologías Innovadoras</td></tr>
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
					<tr><td>Asistencia al Usuario Con Patologías</td></tr>
					<tr><td>Asistencia al Usuario Oncológico</td></tr>
					<tr><td>Asistencia Domiciliaria y Extrahospitalaria</td></tr>
					<tr><td>Asistencia en Fisioterapia y Rehabilitación</td></tr>
					<tr><td>Etica y Liderazgo Profesional</td></tr>

					<tr><td>&nbsp;</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</section>


@endsection