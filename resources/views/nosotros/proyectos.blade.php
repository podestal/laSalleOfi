@extends('layouts.Menu')
@section('title', 'Trabaje con nosotros | Instituto San Juan Bautista La Salle')

<link rel="stylesheet" type="text/css" href="{{ asset('css/nosotros/proyectos.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')
<main>
    <div class="container full main-about header">
        <div class="item s-100 m-100 header__banner">
            <img src="{{ asset('imgs/header-instituto-san-juan-bautista-la-salle-juliaca.jpg') }}" alt="" class="main-contact__img">
            <div class="header__title">
                <h1>Proyectos de Investigación</h1>
                <p>Conoce que proyectos realizan nuestros alumnos</p>
            </div>
        </div>
    </div>

    <div class="container full main-about">
        <div class="item s-12 m-12">
            <ul class="career-menu">
                <li class="career-item" data-career="farmacia">Farmacia</li>
                <!--<li class="career-item" data-career="optometria">Optometría</li>-->
                <li class="career-item" data-career="protesis-dental">Prótesis Dental</li>
                <!--<li class="career-item" data-career="fisioterapia">Fisioterapia y Rehabilitación</li>
                <li class="career-item" data-career="enfermeria">Enfermería</li>-->
            </ul>

            <div class="projects-container" id="projects-content">
                <!-- Contenido para Farmacia -->
                <div class="row" id="farmacia-projects">
                    <div class="item s-12 m-4">
                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">
                                    ELABORACIÓN DE CREMA A BASE DE HIERBA BUENA (Mentha spicata) CON EFECTO ANTIBACTERIANO DÉRMICO, JULIACA 2023
                                </h3>
                                <p class="card-author">
                                    AUTOR: YENI LUZ CHURA CAÑAZACA - YAKELIN MAGALY JIMENEZ COILA
                                </p>
                                <p class="card-date">
                                    Año: 2024
                                </p>
                                <p class="card-description">
                                    La elaboración de una crema a base de hierba buena (Mentha spicata) con efecto antibacteriano dérmico es un tema de gran relevancia en la actualidad...
                                </p>
                                
                                <a href="{{ asset('pdf/proyectos/ELABORACIÓN DE CREMA A BASE DE HIERBA BUENA (Mentha Spicata) CON EFECTO ANTIBACTERIANO DERMICO, J.pdf') }}"
                                class="btn_proyect download-btn"
                                target="_blank"
                                download="ELABORACIÓN DE CREMA A BASE DE HIERBA BUENA (Mentha Spicata) CON EFECTO ANTIBACTERIANO DERMICO, J.pdf">
                                Descargar PDF
                                </a>
                            </div>

                        </div>

                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">
                                    ELABORACIÓN DE JABÓN A BASE DE EXTRACTO DE AGUAJE (Mauritia flexuosa) PARA EL TRATAMIENTO DEL ACNÉ, JULIACA - 2023
                                </h3>
                                <p class="card-author">
                                    AUTOR: KATHERINE ANDREA HUAYHUA MAMANI - VERÓNICA YOVANNA AQUINO APAZA
                                </p>
                                <p class="card-date">
                                    Año: 2024
                                </p>
                                <p class="card-description">
                                    El presente trabajo de investigación tiene como objetivo principal elaborar un jabón con extracto de aguaje (Mauritia flexuosa) con efecto antioxidante para la piel.
                                </p>
                                
                                <a href="{{ asset('pdf/proyectos/ELABORACION DE JABON A BASE DE EXTRASCTO DE AGUAJE (mauritia flexuosa) PARA EL TRATAMIENTO DE ACNE, JULIACA-2023 (1).pdf') }}"
                                class="btn_proyect download-btn"
                                target="_blank"
                                download="ELABORACION DE JABON A BASE DE EXTRASCTO DE AGUAJE (mauritia flexuosa) PARA EL TRATAMIENTO DE ACNE, JULIACA-2023.pdf">
                                Descargar PDF
                                </a>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">
                                    ELABORACIÓN DE JABÓN A BASE DE EXTRACTO DE AGUAJE (Mauritia flexuosa) PARA EL TRATAMIENTO DEL ACNÉ, JULIACA - 2023
                                </h3>
                                <p class="card-author">
                                    AUTOR: KATHERINE ANDREA HUAYHUA MAMANI - VERÓNICA YOVANNA AQUINO APAZA
                                </p>
                                <p class="card-date">
                                    Año: 2024
                                </p>
                                <p class="card-description">
                                    El presente trabajo de investigación tiene como objetivo principal elaborar un jabón con extracto de aguaje (Mauritia flexuosa) con efecto antioxidante para la piel.
                                </p>

                                <a href="{{ asset('pdf/proyectos/ELABORACION DE JABON A BASE DE EXTRASCTO DE AGUAJE (mauritia flexuosa) PARA EL TRATAMIENTO DE ACNE, JULIACA-2023 (1).pdf') }}"
                                class="btn_proyect download-btn"
                                target="_blank"
                                download="ELABORACION DE JABON A BASE DE EXTRASCTO DE AGUAJE (mauritia flexuosa) PARA EL TRATAMIENTO DE ACNE, JULIACA-2023.pdf">
                                    Descargar PDF
                                </a>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">
                                    ELABORACIÓN DE CREMA TÓPICA A BASE DEL EXTRACTO DE CONGONA (Peperomia galioides Kunth) CON EFECTO CICATRIZANTE EN HERIDAS SUPERFICIALES, JULIACA 2024
                                </h3>
                                <p class="card-author">
                                    AUTOR: YESENIA VERÓNICA MAMANI LÓPEZ
                                </p>
                                <p class="card-date">
                                    Año: 2024
                                </p>
                                <p class="card-description">
                                    El presente trabajo de investigación tiene como objetivo principal elaborar una crema tópica con extracto de congona (Peperomia galioides Kunth) con efecto cicatrizante en heridas superficiales...
                                </p>

                                <a href="{{ asset('pdf/proyectos/Elaboracion de Crema Topica a base del Extracto de Congona ( Peperomia galioides kunth) con efect.pdf') }}"
                                class="btn_proyect download-btn"
                                target="_blank"
                                download="Elaboracion de Crema Topica a base del Extracto de Congona.pdf">
                                    Descargar PDF
                                </a>
                            </div>
                        </div>



                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">
                                    ENJUAGUE BUCAL ELABORADO A BASE DEL ACEITE ESENCIAL DE MENTA PIPERITA (MENTA) CON EFECTO ANTIBACTERIANO FRENTE AL STREPTOCOCCUS MUTANS, JULIACA 2024
                                </h3>
                                <p class="card-author">
                                    AUTOR: JAQUELINE GLENY TITI QUISPE - AIDA YANETH MAMANI HUANCOLLO
                                </p>
                                <p class="card-date">
                                    Año: 2024
                                </p>
                                <p class="card-description">
                                    El presente informe de investigación lleva por título “Enjuague bucal elaborado a base del aceite esencial de menta piperita (menta) con efecto antibacteriano frente al Streptococcus mutans, Juliaca 2024”...
                                </p>

                                <a href="{{ asset('pdf/proyectos/ENJUAGUE BUCAL ELABORADO A BASE DEL ACEITE ESENCIAL DE MENTA PIPERITA (MENTA) CON EFECTO ANTIBAC.pdf') }}"
                                class="btn_proyect download-btn"
                                target="_blank"
                                download="ENJUAGUE BUCAL MENTA PIPERITA - JULIACA 2024.pdf">
                                    Descargar PDF
                                </a>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">
                                    ELABORACIÓN DE UN GEL A BASE DE EXTRACTO HIDROALCOHÓLICO DE LA FLOR DE JAMAICA (HIBISCUS SABDARIFFA L.) CON EFECTO ANTIINFLAMATORIO, JULIACA - 2024
                                </h3>
                                <p class="card-author">
                                    AUTOR: GLENY MARLENY CHAMBI SUCASACA - MARIA CELIA FERNANDEZ MONTEAGUDO
                                </p>
                                <p class="card-date">
                                    Año: 2025
                                </p>
                                <p class="card-description">
                                    El presente informe de investigación tiene como objetivo principal elaborar un gel con efecto antiinflamatorio a partir de un extracto de flor de Jamaica...
                                </p>

                                <a href="{{ asset('pdf/proyectos/ELABORACION DE UN GEL A BASE DE EXTRACTO HIDROALCOHOLICO DE LA FLOR DE JAMAICA CON EFECTO ANTIINF.pdf') }}"
                                class="btn_proyect download-btn"
                                target="_blank"
                                download="GEL FLOR DE JAMAICA - JULIACA 2024.pdf">
                                    Descargar PDF
                                </a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">
                                    ELABORACIÓN DE GOMITAS A BASE DE MUÑA (Minthostachys mollis) CON EFECTO ANTIBACTERIANO PARA ENFERMEDADES GASTROINTESTINALES, JULIACA 2024
                                </h3>
                                <p class="card-author">
                                    AUTOR: TANIA QUISPE GUTIERREZ
                                </p>
                                <p class="card-date">
                                    Año: 2024
                                </p>
                                <p class="card-description">
                                    Las enfermedades gastrointestinales, como la gastritis, la colitis y otras infecciones bacterianas del sistema digestivo, son problemas de salud pública que afectan a una gran parte de la población, reduciendo significativamente su calidad de vida...
                                </p>

                                <a href="{{ asset('pdf/proyectos/ELABORACIÓN DE GOMITAS A BASE DE MUÑA (Minthostachys mollis) CON EFECTO ANTIBACTERIANO PARA ENFER.pdf') }}"
                                class="btn_proyect download-btn"
                                target="_blank"
                                download="GOMITAS DE MUÑA - JULIACA 2024.pdf">
                                    Descargar PDF
                                </a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">
                                    ELABORACIÓN DE NÉCTAR A BASE DE AGUAYMANTO (Physalis peruviana L.) CON EFECTO HIPOGLUCEMIANTE EN DIABETES MELLITUS TIPO 2, JULIACA 2024
                                </h3>
                                <p class="card-author">
                                    AUTOR: FRANZ RIGOBERT JAÑO APAZA - ANALI DEYSI LIPA MAMANI
                                </p>
                                <p class="card-date">
                                    Año: 2025
                                </p>
                                <p class="card-description">
                                    El aguaymanto tiene propiedades nutritivas y medicinales, con un alto contenido de antioxidantes y fitoquímicos que se relacionan con la reducción del riesgo de padecer dislipidemias, enfermedades cardiovasculares y diabetes...
                                </p>

                                <a href="{{ asset('pdf/proyectos/Elaboración de néctar a base de aguaymanto(physalis peruviana), con efecto hipogluucemiante julia.pdf') }}"
                                class="btn_proyect download-btn"
                                target="_blank"
                                download="Néctar de Aguaymanto - Juliaca 2024.pdf">
                                    Descargar PDF
                                </a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">
                                    CREMA A BASE DE ACEITE ESENCIAL DE MUÑA (Minthostachys mollis) CON EFECTO ANTIMICÓTICO, JULIACA - 2024
                                </h3>
                                <p class="card-author">
                                    AUTOR: YULI LIZBETH MAMANI CARCAUSTO - FRIDA NISLAYDA LAURA TURPO
                                </p>
                                <p class="card-date">
                                    Año: 2024
                                </p>
                                <p class="card-description">
                                    Desde hace tiempo, las infecciones por micosis vienen siendo una amplia familia de diversas enfermedades complejas, recluidas en diferentes partes del huésped...
                                </p>

                                <a href="{{ asset('pdf/proyectos/CREMA A BASE DE ACEITE ESENCIAL DE MUÑA CON EFECTO ANTIMICOTICO (2) (1).pdf') }}"
                                class="btn_proyect download-btn"
                                target="_blank"
                                download="Crema Antimicótica de Muña - Juliaca 2024.pdf">
                                    Descargar PDF
                                </a>
                            </div>
                        </div>


                        

                    </div>
                </div>

                <!-- Contenido para Optometría-->
                <div class="row" id="optometria-projects" style="display: none;">
                    <div class="item s-12 m-4">
                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">Título del Proyecto de Optometría 1</h3>
                                <p class="card-author">Nombre del Autor 2</p>
                                <p class="card-date">Fecha de Publicación 2</p>
                                <p class="card-description">Esta es una breve descripción del proyecto de optometría.</p>
                                <p>
                                    <a href="{{asset('pdf/elaboracion-de-una-forma-farmaceutica-a-base-frutos.pdf')}}"></a>
                                </p>
                                <a href="{{ asset('pdf/elaboracion-de-una-forma-farmaceutica-a-base-frutos.pdf')}}" class="btn_proyect download-btn">Descargar PDF</a>
                            </div>
                        </div>

                
                    </div>
                </div>

                <div class="row" id="protesis-dental-projects" style="display: none;">
                    <!-- Contenido para Prótesis Dental -->
                    <div class="item s-12 m-4">

                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">APARATO DE ORTODONCIA</h3>
                                <p class="card-author">AUTOR: VANESA LUICHO HUAMAN</p>
                                <p class="card-date">Año: 2022</p>
                                <p class="card-description">
                                    La mordida invertida o mordida cruzada anterior se produce cuando los dientes superiores están por detrás de los inferiores...
                                </p>

                                <a href="{{ asset('pdf/proyectos/VANESA LUICHO HUAMAN.pdf') }}"
                                class="btn_proyect download-btn"
                                target="_blank"
                                download="Aparato de Ortodoncia - Vanesa Luicho Huaman.pdf">
                                    Descargar PDF
                                </a>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">ELABORACIÓN DE PRÓTESIS FIJA DE CUATRO PIEZAS CORONAS VENNER</h3>
                                <p class="card-author">AUTOR: MARIA ELENA MAMANI LUQUE</p>
                                <p class="card-date">Año: 2022</p>
                                <p class="card-description">
                                    En el campo de la prótesis dental, existen diversas ramas, de las cuales en el presente trabajo se señala la prótesis fija...
                                </p>

                                <a href="{{ asset('pdf/proyectos/PROYECTO LA SALLE.pdf') }}"
                                class="btn_proyect download-btn"
                                target="_blank"
                                download="Protesis Fija Cuatro Piezas - Maria Mamani Luque.pdf">
                                    Descargar PDF
                                </a>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">
                                    MODELO DESTENTADO DE PACIENTE DE ARCADA SUPERIOR DE CLASE UNO MODIFICACIÓN DOS, 
                                    PRÓTESIS PARCIAL REMOVIBLE DE BASE METÁLICA
                                </h3>
                                <p class="card-author">AUTOR: YUSMER PAUL HUANCA QUEA</p>
                                <p class="card-date">Año: 2024</p>
                                <p class="card-description">
                                    Modelo destentado de paciente de arcada superior de clase uno modificación dos, 
                                    prótesis parcial removible de base metálica...
                                </p>

                                <a href="{{ asset('pdf/proyectos/Informe de investigación  yusmer .pdf') }}"
                                class="btn_proyect download-btn"
                                target="_blank"
                                download="Informe Investigacion - Yusmer Huanca.pdf">
                                    Descargar PDF
                                </a>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">
                                    PARALELIZADO Y DISEÑO DE LA PRÓTESIS PARCIAL REMOVIBLE SEGÚN LA CLASIFICACIÓN DE KENNEDY
                                </h3>
                                <p class="card-author">AUTOR: MARIBEL NINFA RAMOS CAPQUEQUI</p>
                                <p class="card-date">Año: 2024</p>
                                <p class="card-description">
                                    El paralelizado dental es de vital importancia para planear, ejecutar y comprobar la
                                    precisión de las preparaciones necesarias en las dentaduras parciales removibles.
                                </p>

                                <a href="{{ asset('pdf/proyectos/Paralelizado y Diseño en Protesis Parcial Removible. Maribel N. Ramos Capquequi (6) (7).pdf') }}"
                                class="btn_proyect download-btn"
                                target="_blank"
                                download="Paralelizado y Diseño - Maribel Ramos.pdf">
                                    Descargar PDF
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row" id="fisioterapia-projects" style="display: none;">
                    <!-- Contenido para Fisioterapia y Rehabilitación -->
                    <div class="item s-12 m-4">
                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">Título del Proyecto de Fisioterapia y Rehabilitación 1</h3>
                                <p class="card-author">Nombre del Autor 2</p>
                                <p class="card-date">Fecha de Publicación 2</p>
                                <p class="card-description">Esta es una breve descripción del proyecto de optometría.</p>
                                <p>
                                    <a href="{{ asset('pdf/propiedades-terapeuticas-de-gusano-laqato.pdf')}}"></a>
                                </p>
                                    <a href="{{ asset('pdf/propiedades-terapeuticas-de-gusano-laqato.pdf')}}" class="btn_proyect download-btn">Descargar PDF</a>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="row" id="enfermeria-projects" style="display: none;">
                    <!-- Contenido para Enfermería -->
                    <div class="item s-12 m-4">
                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">Título del Proyecto de Enfermería 1</h3>
                                <p class="card-author">Nombre del Autor 2</p>
                                <p class="card-date">Fecha de Publicación 2</p>
                                <p class="card-description">Esta es una breve descripción del proyecto de optometría.</p>
                                <p>
                                    <a href="{{asset('pdf/vino-medicinal-de-ajenjo-contra-parasitosis-en-ninos.pdf')}}"></a>
                                </p>
                                    <a href="{{ asset('pdf/vino-medicinal-de-ajenjo-contra-parasitosis-en-ninos.pdf')}}" class="btn_proyect download-btn">Descargar PDF</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row" id="entrenamiento-deportivo-projects" style="display: none;">
                    <!-- Contenido para Entrenamiento Deportivo -->
                    <div class="item s-12 m-4">
                        <div class="card">
                            <div class="card-content">
                                <h3 class="card-title">Título del Proyecto de Entrenamiento Deportivo 1</h3>
                                <p class="card-author">Nombre del Autor 2</p>
                                <p class="card-date">Fecha de Publicación 2</p>
                                <p class="card-description">Esta es una breve descripción del proyecto de optometría.</p>
                                <p>
                                    <a href="{{ asset ('pdf/elaboracion-de-oximielito-a-base-de-huira-huira.pdf')}}"></a>
                                </p>
                                    <a href="{{ asset ('pdf/elaboracion-de-oximielito-a-base-de-huira-huira.pdf')}}" class="btn_proyect download-btn">Descargar PDF</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>document.addEventListener('DOMContentLoaded', function () {
    const careerItems = document.querySelectorAll('.career-item');
    const projectSections = document.querySelectorAll('.row');

    // Función para mostrar los proyectos según la carrera seleccionada
    function showProjects(career) {
        // Oculta todos los contenedores de proyectos
        projectSections.forEach(section => {
            section.style.display = 'none';
        });
        
        // Elimina la clase "active" de todos los ítems del menú
        careerItems.forEach(item => {
            item.classList.remove('active');
        });
        
        // Muestra el contenedor de la carrera seleccionada
        const activeSection = document.getElementById(`${career}-projects`);
        if (activeSection) {
            activeSection.style.display = 'flex';
        }
        
        // Añade la clase "active" al ítem de carrera seleccionado
        document.querySelector(`[data-career="${career}"]`).classList.add('active');
    }

    // Añadir evento de clic a cada ítem de carrera
    careerItems.forEach(item => {
        item.addEventListener('click', function () {
            const career = this.getAttribute('data-career');
            showProjects(career);
        });
    });

    // Mostrar los proyectos de la carrera activa al cargar la página
    const initialCareer = document.querySelector('.career-item.active').getAttribute('data-career');
    showProjects(initialCareer);
});
</script>
@endsection