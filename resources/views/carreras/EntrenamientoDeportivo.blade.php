@extends('layouts.Menu')
@section('title', 'Profesional Tecnico en Técnica en Entrenamiento Deportivo')

<link rel="stylesheet" type="text/css" href="{{ asset('css/carrerasCss/carrera.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')
<section>
	<div class="main-carrera">
		<div class="container full">
			<div class="item s-100 main-carrera__banner">

				<!-- Video de fondo -->
				<video autoplay loop muted playsinline class="sede-video">
					<source src="{{ asset('videos/     .mp4') }}" type="video/mp4">
					Tu navegador no admite la reproducción de videos.
				</video>

				<!-- Contenido centrado sobre el video -->
				<div class="main-carrera__banner--content">
					<img src="{{ asset('imgs/entrenamiento-deportivo.png') }}" alt="">
					<h1>CARRERA: TÉCNICA EN ENTRENAMIENTO DEPORTIVO</h1>
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
						<p>El programa Profesional Técnico en Entrenamiento Deportivo, obedece a una necesidad
							específica nacional, como es la de cualificar o mejorar los procesos de preparación
							deportiva, los cuales incorporan las etapas de formación, el perfeccionamiento y los altos
							logros deportivos</p>
						<p>En virtud de lo anterior, nuestro programa busca ser líder en la
							formación de profesionales altamente comprometidos con el mejoramiento de la calidad de
							vida, así como con los procesos de preparación deportiva de los (as) peruanos (as), con
							visión de transformación, innovación y responsabilidad social en el área.</p>					
					</div>

				</div>
				<div class="item s-100 m-50 main-carrera__content--competencias">
					<h2 class="h2">Competencias</h2>
					<div>
						<p>El Técnico Profesional en Entrenamiento Deportivo se enfoca en mejorar la preparación 
							deportiva y el desarrollo de atletas a través de la planificación, dirección y evaluación 
							de programas de entrenamiento. Este profesional tiene habilidades para identificar talentos, 
							diseñar competiciones deportivas y promover la salud y el bienestar a través del deporte. 
							Con un enfoque en la calidad de vida y la responsabilidad social, el Técnico Profesional en 
							Entrenamiento Deportivo busca ser un agente de cambio y mejora en el ámbito deportivo, contribuyendo
							 al desarrollo del deporte en la sociedad.</p>					
					</div>
				</div>
			</div>
			<div class="item container full s-100 main-carrera__parrafo">
				<div class="item s-100 m-50 main-carrera__parrafo--content">
					<h2 class="h2">¿Qué hace un egresado?</h2>
					<div>
						<ol>
							<li>Realizar diagnósticos en el ámbito de la preparación deportiva.</li>
							<li>Formular planes, programas y proyectos en el ámbito del entrenamiento deportivo.</li>
							<li>Estructurar, controlar y evaluar cargas en procesos de entrenamiento.</li>
							<li>Identificar y seleccionar talentos para el deporte, así como una adecuada orientación deportiva.</li>
							<li>Dirigir deportistas de diferentes etapas en un determinado deporte.</li>
							<li>Ejecutar y controlar planes individuales y colectivos de entrenamiento deportivo para la salud y el bienestar.</li>
						</ol>					
					</div>
				</div>
				<div class="item s-100 m-50 main-carrera__parrafo--img">
					<img src="{{ asset('imgs/Entrenamiento-deportivo-carrera.jpg') }}" alt="CARRERA TECNICA DE FARMACIA">
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
			<h3>MTP N° 1 Atención de Urgencias y Administración de una Oficina Farmacéutica</h3>
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE I</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Análisis de Procesos Biológicos y Químicos en el Ser Humano</td></tr>
					<tr><td>Estudio Estructural y Funcional del Ser Humano</td></tr>
					<tr><td>Técnicas de Administración de Medicamentos</td></tr>
					<tr><td>Atención de Medicamentos Esenciales</td></tr>
					<tr><td>Técnicas de Comunicación</td></tr>
					<tr><td>Lógica y Funciones</td></tr>
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
					<tr><td>Análisis Microbiano en la Industria Farmacéutica</td></tr>
					<tr><td>Primeros Auxilios y Emergencias Toxicologicas en un Establecimiento Farmacéutico</td></tr>
					<tr><td>Manejo de Documentos Contables en un Establecimiento Famaceutico</td></tr>
					<tr><td>Lineamientos de Políticas Nacionales de Salud y Medicamentos</td></tr>
					<tr><td>Interpretación y Producción de Textos</td></tr>
					<tr><td>Estadistica General</td></tr>
				</tbody>
			</table>
		</div>
		<div class="item s-100">
			<h3 class="main-sillabus__subtitle">MTP N° 2 Dispensación de Medicamentos y Atención en Farmacia</h3>	
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE III</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Venta y Dispensación de Medicamentos y Productos Afines</td></tr>
					<tr><td>Estudio de Enfermedades y su Tratamiento Farmacológico I</td></tr>
					<tr><td>Aplicación de Bases Farmacológicas de los Medicamentos I</td></tr>
					<tr><td>Investigación Tecnológica</td></tr>
					<tr><td>Gestion Empresarial</td></tr>
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
					<tr><td>Estudio de Enfermedades y su Tratamiento Farmacológico II</td></tr>
					<tr><td>Aplicación de Bases Farmacológicas de los Medicamentos II</td></tr>
					<tr><td>Clasificación de Medicamentos farmaceúticos, dispositivos médicos, productos sanitarios</td></tr>
					<tr><td>Promoción y Prevención de Salud en Farmacia</td></tr>
					<tr><td>Control y Vigilancia de Establecimiento Farmaceútico</td></tr>
					<tr><td>Investigación Tecnológica</td></tr>
				</tbody>
			</table>
		</div>
		<div class="item s-100">
			<h3 class="main-sillabus__subtitle">MTP N° 3 Elaboración y Comercialización de Productos Farmacéuticos y Afines</h3>	
		</div>
		<div class="item s-100 m-50 main-sillabus__table">
			<table>
				<thead>
					<tr>
						<th>SEMESTRE V</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Métodos de Extracción e Identificación</td></tr>
					<tr><td>Venta y Dispensación de Productos Naturales</td></tr>
					<tr><td>Técnicas de Transformación de Materias Primas y control de calidad</td></tr>
					<tr><td>Aspectos Legales en la Industria Farmacéutica</td></tr>
					<tr><td>Investigación Tecnológica</td></tr>
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
					<tr><td>Toxicologia</td></tr>
					<tr><td>Elaboracion de Formas Farmacéuticas y Control de Calidad</td></tr>
					<tr><td>Procesamiento de Productos Galénicos, Naturales, Cosméticos y Afines</td></tr>
					<tr><td>Investigación Tecnológica</td></tr>
					<tr><td>Tecnología de la Información y Comunicación</td></tr>
					<tr><td>&nbsp;</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</section>


@endsection