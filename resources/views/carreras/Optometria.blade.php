@extends('layouts.Menu')
@section('title', 'Profesional Tecnico en Técnica en Optometra')

<link rel="stylesheet" type="text/css" href="{{ asset('css/carrerasCss/carrera.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')
<section>
	<div class="main-carrera">
		<div class="container full">
			<div class="item s-100 main-carrera__banner">

				<!-- Video de fondo -->
				<video autoplay loop muted playsinline class="sede-video">
					<source src="{{ asset('videos/VideoOptometria.mp4') }}" type="video/mp4">
					Tu navegador no admite la reproducción de videos.
				</video>

				<!-- Contenido sobre el video -->
				<div class="main-carrera__banner--content">
					<img src="{{ asset('imgs/imagen-de-optometria.png') }}" alt="">
					<h1>CARRERA: TÉCNICA EN OPTOMETRÍA</h1>
					<p><em>(Profesional técnico en Optometria)</em></p>
				</div>

			</div>

		</div>
		<div class="container full">	
			<div class="item container full s-100 main-carrera__content">
				<div class="item s-100 m-50 main-carrera__content--description">
					<!--<h2>FARMACIA</h2>-->
					<h2 class="h2">Descripción</h2>
					<div>
						<p>El profesional técnico en Optometría es altamente calificado en la atención primaria de la salud,
							enfatizando el cuidado de la salud visual mediante el desarrollo de actividades dirigidas a la 
							prevención, detección, evaluación y tratamiento de las alteraciones de la visión. Para ello 
							adquirirán conocimientos, habilidades y destrezas en la realización de exámenes visuales y
							oculares, diseño, verificación y adaptación de sistemas ópticos, diseño y desarrollo de programas
							de entrenamiento visual y diseño y propuestas de mejoras ergonómicas.</p>
					</div>
				</div>
				<div class="item s-100 m-50 main-carrera__content--competencias">
					<h2 class="h2">Competencias</h2>
					<div>
						<p>El Profesional Técnico en Optometría se especializa en la atención primaria de la salud visual, 
							realizando exámenes, adaptando lentes, diseñando programas de entrenamiento visual y mejorando la 
							ergonomía para proteger la vista. Su trabajo se basa en la atención al paciente, la comunicación 
							efectiva y el conocimiento de las enfermedades oculares.</p>					
					</div>
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
					<img src="{{ asset('imgs/optometria.jpeg') }}" alt="CARRERA TECNICA DE FARMACIA">
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
					<ul><li>Turno Noche: 05:30pm a 08:45pm</li></ul></div>
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
			<h3>MF N° 1 PREVENCIÓN DE LA SALUD</h3>
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE I</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Óptica Geometría Aplicada	</td></tr>
					<tr><td>Óptica Física Aplicada</td></tr>
					<tr><td>Bioquímica	</td></tr>
					<tr><td>Anatomía y Fisiología Humana</td></tr>
					<tr><td>Matemática</td></tr>
					<tr><td>Desarrollo Personal</td></tr>
					<tr><td>Tecnología de la Información</td></tr>
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
					<tr><td>Anatomía y Fisiología Ocular</td></tr>
					<tr><td>Biología Ocular	</td></tr>
					<tr><td>Patología General	</td></tr>
					<tr><td>Óptica oftálmica</td></tr>
					<tr><td>Óptica Fisiológica</td></tr>
					<tr><td>Fundamentos de Investigación</td></tr>
					<tr><td>Produccion y Comprecion de Textos</td></tr>
					<tr><td>Estadística Básica</td></tr>
					
				</tbody>
			</table>
		</div>
		<div class="item s-100">
			<h3 class="main-sillabus__subtitle">MF N° 2 RECUPERACIÓN Y REHABILITACIÓN BÁSICA</h3>	
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE III</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Patología Visual</td></tr>
					<tr><td>Ética Profesional</td></tr>
					<tr><td>Análisis Optométrico</td></tr>
					<tr><td>Optometría clínica I	</td></tr>
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
					<tr><td>Optometría Pediátrica</td></tr>
					<tr><td>Optometría clínica II</td></tr>
					<tr><td>Optometría General	</td></tr>
					<tr><td>Técnicas y Procedimientos Optométricos</td></tr>
					<tr><td>Termonilogía Profesional en Inglés</td></tr>
					<tr><td></td></tr>
			
				</tbody>
			</table>
		</div>
		<div class="item s-100">
			<h3 class="main-sillabus__subtitle">MF N° 3 RECUPERACIÓN Y REHABILITACIÓN INTEGRAL DE LA PERSONA</h3>	
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE V</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Higiene y Seguridad Visual	</td></tr>
					<tr><td>Visión Sub-Normal	</td></tr>
					<tr><td>Contactología General</td></tr>
					<tr><td>Lentes de contactos Blandos</td></tr>
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
					<tr><td>Lentes de contactos Multifuncionales y Afaquicos</td></tr>
					<tr><td>Rehabilitación Visual y Prótasis Ocular	</td></tr>
					<tr><td>Urgencias y Emergencias en Optometría</td></tr>
					<tr><td>Etica y Liderazgo Profesional</td></tr>
					<tr><td></td></tr>

					<tr><td>&nbsp;</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</section>


@endsection