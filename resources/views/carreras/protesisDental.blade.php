@extends('layouts.Menu')
@section('title', 'Profesional Técnico en Protesis Dental')

<link rel="stylesheet" type="text/css" href="{{ asset('css/carrerasCss/carrera.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')
<section>
	<div class="main-carrera">
		<div class="container full">
			<div class="item s-100 main-carrera__banner">

				<!-- Video de fondo -->
				<video autoplay loop muted playsinline class="sede-video">
					<source src="{{ asset('videos/VideoProtesisDental.mp4') }}" type="video/mp4">
					Tu navegador no admite la reproducción de videos.
				</video>

				<!-- Contenido sobre el video -->
				<div class="main-carrera__banner--content">
					<img src="{{ asset('imgs/carrera-tecnica-de-protesis-dental.png') }}" alt="">
					<h1>CARRERA: TÉCNICA EN PRÓTESIS DENTAL</h1>
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
						<p>Con tu formación en la Carrera de Técnico en Prótesis Dental recibirás la formación para convertirte en un colaborador directo del Profesional de Odontología en su trabajo en pro de la salud oral.</p>
						<p>Como egresado podrás desempeñarte en un laboratorio dental elaborando aparatos para prótesis, ortodoncia y apoyando directamente la labor del odontólogo.</p>					</div>
				</div>
				<div class="item s-100 m-50 main-carrera__content--competencias">
					<h2 class="h2">Competencias</h2>
					<div>
						<p>El profesional Egresado estará en la capacidad de realizar la construcción de prótesis dentales, dispositivos de ortodoncia y ortopedia de acuerdo a las indicaciones del Odontólogo, basado en sólidos conocimientos científicos y a los criterios de calidad y estética, haciendo uso de diversas tecnologías de vanguardia.</p>					</div>
				</div>
			</div>
			<div class="item container full s-100 main-carrera__parrafo">
				<div class="item s-100 m-50 main-carrera__parrafo--content">
					<h2 class="h2">¿Qué hace un egresado?</h2>
					<div>
						<ol>
							<li>Estarás completamente capacitado para formar parte del equipo que brinda servicios de odontología.</li>
							<li>Planificar, diseñar y producir los diversos tipos de prótesis dental, con rigurosa minuciosidad, destreza técnica y ética profesional.</li>
							<li>Aplicar los conocimientos científicos y la habilidades técnicas en toda acción clínica de rehabilitación protésica.</li>
							<li>Demostrar sus habilidades manuales y conocimientos sobre aspectos relacionados con la Odontología, tales como la Anatomía Bucal, Oclusión, Aparatología, dominio de materiales entre otros.</li>
							<li>Conducir laboratorios de prótesis dental de acuerdo a las técnicas de organización y administración moderna y a las leyes nacionales.</li>
							<li>Realizar acciones de promoción de la salud oral, en coordinación con los organismos públicos e instituciones correspondientes.</li>
						</ol>					
					</div>
				</div>
				<div class="item s-100 m-50 main-carrera__parrafo--img">
					<img src="{{ asset('imgs/protesisDental.jpeg') }}" alt="CARRERA TECNICA DE PROTESIS DENTAÑ">
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
					<ul><li>Turno Mañana: 08:00 a 11:40</li><li>Turno Tarde: 01:30pm a 05:10pm</li></ul></div>
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
			<h3>MF Nº 01:  DISEÑO DE PRÓTESIS DENTALES</h3>
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE I</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Anatomía y Fisiología Bucodentaria</td></tr>
					<tr><td>Materiales Dentales</td></tr>
					<tr><td>Oclusión Dentaria</td></tr>
					<tr><td>Retenedores Intracoronarios y Extracoronarios</td></tr>
					<tr><td>Puentes Dentales</td></tr>
					<tr><td>Bioseguridad en Laboratorio Dental</td></tr>
					<tr><td>Optención de Modelos de Trabajo</td></tr>
					<tr><td>Procesamiento de la Prótesis Total</td></tr>
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
					<tr><td>Producion y Comprencion de Textos</td></tr>
					<tr><td>Matemática</td></tr>
					<tr><td>Desarrollo Personal</td></tr>
					<tr><td>Tecnología de la Información</td></tr>
					<tr><td>Estadistica Basica</td></tr>
				</tbody>
			</table>
		</div>
		<div class="item s-100">
			<h3 class="main-sillabus__subtitle">MF Nº 02: FABRICACIÓN DE PRÓTESIS FIJAS Y REMOVIBLES</h3>	
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE III</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Diseño de Prótesis Parcial Removible</td></tr>
					<tr><td>Prótesis Parcial Removible Base Acrílica</td></tr>
					<tr><td>Procedimiento de Laboratorio Prótesis Parcial Removible de Base Acrílica</td></tr>
					<tr><td>Reparaciones de Prótesis Parcial Removible</td></tr>
					<tr><td>Administración de laboratorio Dental</td></tr>
					<tr><td>Protesis Parcial Removible Base Metalica</td></tr>
					<tr><td>Ingles</td></tr>
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
					<tr><td>Sobre Dentadura Completa</td></tr>
					<tr><td>Procedimiento de Laboratorio Prótesis Parcial Removible Base Metálica</td></tr>
					<tr><td>Costos y Repuestos </td></tr>
					<tr><td>Terminología Profesional en Inglés</td></tr>
					<tr><td></td></tr>
				</tbody>
			</table>
		</div>
		
		<div class="item s-100">
			<h3 class="main-sillabus__subtitle">MF Nº 3:  CONFECCIÓN Y REPARACIÓN DE ORTODONCIA Y ORTOPEDIA MAXILAR</h3>	
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE V</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Materiales Dentales Para Cerámica</td></tr>
					<tr><td>Confección de Aparatos de Ortodoncia Removible</td></tr>
					<tr><td>Confección de Aparatos de Ortodoncia Fija y Semifija</td></tr>
					<tr><td>Confección de Aparatos de Ortopedia Funcional</td></tr>
					<tr><td>Reparación de AparaTos de Ortodoncia y Ortopedia</td></tr>
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
					<tr><td>Procedimientos de Laboratorio en Ceramica Dental</td></tr>
					<tr><td>Procedimiento de Laboratorio Prótesis Total Poliplano</td></tr>
					<tr><td>Procedimiento de Laboratorio Prótesis Total Monoplano</td></tr>
					<tr><td>Metodoloías Innovadoras</td></tr>
					<tr><td>Etica y Liderazgo Profesional</td></tr>
					<tr><td>&nbsp;</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

@endsection