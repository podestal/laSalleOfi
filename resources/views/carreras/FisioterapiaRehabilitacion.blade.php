@extends('layouts.Menu')
@section('title', 'Profesional Técnico en Fisioterapia y Rehabilitación')

<link rel="stylesheet" type="text/css" href="{{ asset('css/carrerasCss/carrera.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')
<section>
    <div class="main-carrera">
        <div class="container full">
        <div class="item s-100 main-carrera__banner">

            <!-- Video de fondo -->
            <video autoplay loop muted playsinline class="sede-video">
                <source src="{{ asset('videos/VideoFisioterapia.mp4') }}" type="video/mp4">
                Tu navegador no admite la reproducción de videos.
            </video>

            <!-- Contenido sobre el video -->
            <div class="main-carrera__banner--content">
                <img src="{{ asset('imgs/fisioterapia-y-rehabilitacion.png') }}" alt="">
                <h1>CARRERA: TÉCNICA EN FISIOTERAPIA Y REHABILITACIÓN</h1>
                <p><em>Profesional técnico en Fisioterapia y Rehabilitación</em></p>
            </div>

        </div>

        </div>
        <div class="container full">    
            <div class="item container full s-100 main-carrera__content">
                <div class="item s-100 m-50 main-carrera__content--description">
                    <h2 class="h2">Descripción</h2>
                    <div>
                        <p>Con tu formación en la Carrera de Fisioterapia y Rehabilitación recibirás los conocimientos para aplicarlos en favor de la recuperación de la población que ha sufrido algún accidente o tiene dificultades motoras por causas genéticas o a consecuencia de alguna enfermedad para rehabilitarlas física y emocionalmente.</p>                  
                    </div>
                </div>
                <div class="item s-100 m-50 main-carrera__content--competencias">
                    <h2 class="h2">Competencias</h2>
                    <div>
                        <p>Programar y realizar tratamientos de fisioterapia y rehabilitación por medios físicos, mecánicos o técnicas especiales, bajo prescripción médica y supervisión del facultativo responsable.</p>   
                        <p>El profesional Egresado estará en la capacidad de realizar diagnósticos, brindar técnicas de rehabilitación, expresión corporal, investigación en este campo, operación de equipamiento para rehabilitación y fisioterapia, pudiendo incorporarse en equipos de profesionales que brindan este servicio.</p>               
                    </div>
                </div>
            </div>
            <div class="item container full s-100 main-carrera__parrafo">
                <div class="item s-100 m-50 main-carrera__parrafo--content">
                    <h2 class="h2">¿Qué hace un egresado?</h2>
                    <div>
                        <ol>
                            <li>Seleccionar el equipamiento y los recursos necesarios de acuerdo a lo solicitado por el profesional de la salud a cargo.</li>
                            <li>Utilizar adecuadamente el material, aparatos y equipos auxiliares, vigilando el funcionamiento de los mismos y detectando las fallas puntuales, realizando su mantenimiento de uso.</li>
                            <li>Programar el trabajo de las distintas terapias usadas en el tratamiento de fisioterapia y rehabilitación, elaborando instrucciones concretas que permitan la realización del tratamiento en el tiempo y forma adecuados.</li>
                            <li>Poseer una visión de conjunto e integrada de las diferentes terapias y tratamientos de fisioterapia y rehabilitación, relacionando o asociando los objetivos, operaciones, secuencias de trabajo y equipos e instrumentos.</li>
                            <li>Interpretar y comprender las indicaciones u órdenes del facultativo responsable para la realización de las distintas terapias de rehabilitación.</li>
                        </ol>                  
                    </div>
                </div>
                <div class="item s-100 m-50 main-carrera__parrafo--img">
                    <img src="{{ asset('imgs/carrera-tecnica-de-fisioterapia-y-rehabilitacion-1.jpg') }}" alt="CARRERA TECNICA DE FISIOTERAPIA Y REHABILITACION">
                </div>
            </div>
        </div>
        <div class="container main-carrera__turnos">
            <div class="item s-100 m-50 main-carrera__turnos--duracion">
                <h2 class="h2">Duración</h2>
                <p>06 Semestres Académicos haciendo un total de 03 Años</p>
            </div>
            <div class="item s-100 m-50 main-carrera__turnos--turno">
                <h2 class="h2">Turnos</h2>
                <div>
                    <ul>
                        <li>Turno Tarde: 01:30pm a 05:10pm</li>
                    </ul>                
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
        <div class="item s-100 main-sillabus__title">
            <h2>MALLA CURRICULAR</h2>
        </div>
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
                    <tr><td>Anatomía Y fisiología Humana</td></tr>
                    <tr><td>Primeros Auxilios e Inyectables</td></tr>
                    <tr><td>Fundamentos Básicos en Salud</td></tr>
                    <tr><td>Introduccion a la Fisioterapia</td></tr>
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
                    <tr><td>Epidemiologia y Enfermedades Transmisibles</td></tr>
                    <tr><td>Anatomía del Aparato Locomotor</td></tr>
                    <tr><td>Actividades en su Salud Pública</td></tr>
                    <tr><td>Actividades en su Salud Familia y Comunidad</td></tr>
                    <tr><td>Produccion y Comprención de Textos</td></tr>
                    <tr><td>Estadística Basica</td></tr>
                    
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
                    <tr><td>Patología General</td></tr>
                    <tr><td>Preparacion y Asistencia al Paciente</td></tr>
                    <tr><td>Agentes Físicos</td></tr>
                    <tr><td>Principios de Masoterapia</td></tr>
                    <tr><td>Farmacología y Admintracion de Medicamentos</td></tr>
                    <tr><td>Inglés</td></tr> 
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
                    <tr><td>Agentes de Tracción</td></tr>
                    <tr><td>Terapia Física</td></tr>
                    <tr><td>Nutrción y Dietoterapia</td></tr>
                    <tr><td>Fisioterapia en Salud Ocupacional</td></tr>
                    <tr><td>Terminología Profesional en Inglés</td></tr>
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
                    <tr><td>Asistencia en Reumatología, Traumatología y Ortopedia</td></tr>
                    <tr><td>Asistencia Fisioterapéutica en Ginecología y Obstetricia</td></tr>
                    <tr><td>Fisioterapia Deportiva</td></tr>
                    <tr><td>Estadística en Salud</td></tr>
                    <tr><td>Metodologñias Innovadoras</td></tr>
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
                    <tr><td>Asistencia Fisioterapéutica en Alteraciones Neurológicas</td></tr>
                    <tr><td>Rehabilitacion en cirugía de pacientes Quemados</td></tr>
                    <tr><td>Fisioterapia y Rehabilitacion en Alteraciones de Lenguaje</td></tr>
                    <tr><td>Etica y Liderazgo Profesional</td></tr>
                    <tr><td>&nbsp;</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection