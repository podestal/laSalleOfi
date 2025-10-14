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
					<ul><li>Turno Mañana: 07:30am a 12:00am</li><li>Turno Tarde: 01:00pm a 06:00pm</li></ul>
				</div>
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
					<tr><td>ANATOMÍA FISIOLÓGICA</td></tr>
					<tr><td>TERMINOLOGÍA Y DOCUMENTACIÓN EN SALUD</td></tr>
					<tr><td>FUNDAMENTOS DE ENFERMERÍA</td></tr>
					<tr><td>PRIMEROS AUXILIOS</td></tr>
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
					<tr><td>PROMOCIÓN Y PREVENCIÓN DE LA SALUD</td></tr>
					<tr><td>EPIDEMIOLOGÍA</td></tr>
					<tr><td>MICROBIOLOGÍA E INMUNOLOGÍA</td></tr>
					<tr><td>SALUD COMUNITARIA</td></tr>
					<tr><td>PRODUCCIÓN Y COMPRENSIÓN DE TEXTOS</td></tr>
					<tr><td>ESTADÍSTICA BÁSICA</td></tr>
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
					<tr><td>BIOSEGURIDAD</td></tr>
					<tr><td>FARMACOLOGÍA</td></tr>
					<tr><td>ASISTENCIA EN MEDICINA ALTERNATIVA</td></tr>
					<tr><td>ASISTENCIA HOSPITALARIA</td></tr>
					<tr><td>ASISTENCIA QUIRÚRGICA</td></tr>
					<tr><td>INGLÉS BÁSICO</td></tr>
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
					<tr><td>SALUD GLOBAL E INTERNACIONAL</td></tr>
					<tr><td>SALUD PÚBLICA</td></tr>
					<tr><td>NUTRICIÓN Y SALUD</td></tr>
					<tr><td>TÉCNICAS DE ADMINISTRACIÓN DE MEDICAMENTOS</td></tr>
					<tr><td>TERMINOLOGÍA PROFESIONAL EN INGLÉS</td></tr>
					<tr><td>&nbsp;</td></tr>
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
					<tr><td>ASISTENCIA EN SALUD MENTAL</td></tr>
					<tr><td>ASISTENCIA GERIÁTRICA</td></tr>
					<tr><td>ASISTENCIA MATERNA Y DEL NEONATO</td></tr>
					<tr><td>ASISTENCIA EN PROCEDIMIENTOS INVASIVOS Y NO INVASIVOS</td></tr>
					<tr><td>SALUD DEL NIÑO Y ADOLESCENTES</td></tr>
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
					<tr><td>ASISTENCIA AL USUARIO CON PATOLOGÍAS</td></tr>
					<tr><td>ASISTENCIA AL USUARIO ONCOLÓGICO</td></tr>
					<tr><td>ASISTENCIA DOMICILIARIA Y EXTRAHOSPITALARIA</td></tr>
					<tr><td>ASISTENCIA EN FISIOTERAPIA Y REHABILITACIÓN</td></tr>
					<tr><td>ÉTICA Y LIDERAZGO PROFESIONAL</td></tr>
					<tr><td>&nbsp;</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</section>


@endsection