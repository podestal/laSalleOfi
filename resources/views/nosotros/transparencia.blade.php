@extends('layouts.Menu')
@section('title', 'Trabaje con nosotros | Instituto San Juan Bautista La Salle')

<link rel="stylesheet" type="text/css" href="{{ asset('css/transparencia.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')
<main><div class="container full main-about header">
	<div class="item s-100 m-100 header__banner">
		<img src="{{ asset('imgs/header-instituto-san-juan-bautista-la-salle-juliaca.jpg') }}" alt="" class="main-contact__img">
		<div class="header__title">
			<h1>Visita Nuestra Informacion Institucional</h1>
			<p>Conoce más de nuestro Instituto</p>
		</div>
    </div>
    <section class="content-area">
        <div class="site-content">
            <h2><i class="fas fa-info-circle"></i> INFORMACIÓN <span style="color:#ff0000;">INSTITUCIONAL</span></h2>
            <p>Descubre toda la información oficial y relevante sobre el Instituto San Juan Bautista La Salle. Accede a documentos como la Resolución Ministerial que respalda nuestra operación, revisa los procesos de otorgamiento de certificados académicos, y conoce todos los detalles sobre nuestro proceso de admisión. ¡Estamos comprometidos con la transparencia y tu futuro!</p>
            <div class="grid-container">
                <div class="grid-item">
                    <a href="{{ asset('pdf/Resoluciones-Carreras.pdf') }}" download="Resolucion-Carreras.pdf" class="grid-item-link">
                        <i class="fas fa-file-alt"></i> Resolución Ministerial <i class="fas fa-download"></i>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ asset('pdf/Otorgamiento-Certificado.pdf') }}" download="Otorgamiento-Certificado.pdf" class="grid-item-link">
                        <i class="fas fa-book-open"></i>Otorgamiento Certificado <i class="fas fa-download"></i>
                    </a>
                </div>
                <div class="grid-item"> 
                    <a href="{{ asset('pdf/proceso-Admision.pdf') }}" download="proceso-Admision.pdf" class="grid-item-link">
                        <i class="fas fa-certificate"></i> Proceso de Admisión <i class="fas fa-download"></i>
                    </a>
                </div>
                
            </div>
        </div>
        <div class="sidebar">
            <img src="{{ asset('imgs/Informacion-Institucional.jpeg') }}">
        </div>
    </section>
    
    <section>
        <div class="site-content">
            <h2><i class="fas fa-cogs"></i> GESTIÓN <span style="color:#ff0000;">INSTITUCIONAL</span></h2>
            <p>Explora de manera clara y accesible toda la gestión institucional del Instituto San Juan Bautista La Salle. Consulta nuestro organigrama institucional, revisa los estados financieros que reflejan nuestra transparencia, y conoce el reglamento interno que guía nuestra convivencia y compromiso educativo. ¡Tu confianza y formación son nuestra prioridad!</p>
            <div class="grid-container">
                <div class="grid-item">
                    <a href="{{ asset('pdf/Organigrama-Institucional.pdf') }}" download="Organigrama-Institucional.pdf" class="grid-item-link">
                        <i class="fas fa-project-diagram"></i> Organigrama Institucional <i class="fas fa-download"></i>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ asset('pdf/Tarifario.pdf') }}" download="Tarifarios.pdf" class="grid-item-link">
                        <i class="fas fa-hand-holding-usd"></i> Tarifario Actualizado <i class="fas fa-download"></i>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ asset('pdf/Reglamento-Normativas.pdf') }}" download="Reglamento-Normativas.pdf" class="grid-item-link">
                        <i class="fas fa-file-contract"></i> Reglamento Interno <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <img src="{{ asset('imgs/Gestion-Instituciones.jpeg') }}">
        </div>
    </section>
    <section>
        <div class="site-content">
            <h2><i class="fas fa-user-graduate"></i> SERVICIOS AL <span style="color:#ff0000;">ESTUDIANTE</span></h2>
            <p>Conoce todos los servicios que el Instituto San Juan Bautista La Salle ofrece para apoyar tu formación integral. Infórmate sobre nuestros convenios institucionales, programas de bienestar estudiantil, servicios de tutoría y consejería académica, y consulta la relación de docentes que te acompañarán en tu desarrollo profesional. ¡Estamos comprometidos con tu bienestar y éxito académico!</p>
            <div class="grid-container">
                <div class="grid-item">
                    <a href="{{ asset('pdf/convenios.pdf') }}" download="convenios.pdf" class="grid-item-link">
                        <i class="fas fa-handshake"></i> Convenios <i class="fas fa-download"></i>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ asset('pdf/Departamento-Psicologia.pdf') }}" download="Departamento-Psicologia.pdf" class="grid-item-link">
                        <i class="fas fa-user-friends"></i> Dep. Psicologia <i class="fas fa-download"></i>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ asset('pdf/Relacion-Docente-Programa.pdf') }}" download="Relacion-Docente-Programa.pdf" class="grid-item-link">
                        <i class="fas fa-users"></i> Docentes <i class="fas fa-download"></i>
                    </a>
                </div>   

                <div class="grid-item">
                    <a href="{{ asset('pdf/becas.pdf') }}" download="becas.pdf" class="grid-item-link">
                        <i class="fas fa-medal"></i> Becas <i class="fas fa-download"></i>
                    </a>
                </div>  
            </div>  
        </div>
        <div class="sidebar">
            <img src="{{ asset('imgs/Servicios-Estudiante.jpeg') }}">
        </div>
    </section>
    
</main>
@endsection