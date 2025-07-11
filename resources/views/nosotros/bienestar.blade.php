@extends('layouts.Menu')
@section('title', 'Bienestar Estudiantil | Instituto San Juan Bautista La Salle')

<link rel="stylesheet" type="text/css" href="{{ asset('css/nosotros/bienestar.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')
<main>
    <!-- Banner superior -->
    <div class="container full main-about header">
        <div class="item s-100 m-100 header__banner">
            <img src="{{ asset('imgs/header-instituto-san-juan-bautista-la-salle-juliaca.jpg') }}" alt="Banner" class="main-contact__img">
            <div class="header__title">
                <h1>Bienestar Estudiantil</h1>
                <p>Trabajamos cada día para brindarte el apoyo que necesitas en tu camino hacia una formación profesional exitosa y plena.</p>
            </div>
        </div>
    </div>

    <!-- Sección de bienestar -->
    <section class="bienestar-section">
        <div class="container bienestar-content">
            <h2>Nuestros Servicios</h2>
            <div class="bienestar-cards">
                <!-- Tarjeta 1 - Salud Mental -->
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="{{ asset('imgs/becas.png') }}" alt="Programas de Becas">
                            <h3>PROGRAMAS DE BECAS</h3>
                            <p>Accede a becas parciales o totales según tu situación económica o desempeño.</p>
                        </div>
                        <div class="card-back">
                            <h3>¿Sabías que…?</h3>
                            <p>
                                Existen becas socioeconómicas, deportivas y por ley. Postula antes de la matrícula con promedio ≥ 17 y sin deudas. 
                                Más información en Bienestar Estudiantil.
                            </p>
                        </div>
                    </div>
                </div>


            
                <!-- Tarjeta 2 - Tutoría y Psicopedagogía -->
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="{{ asset('imgs/tutoria.png') }}" alt="Tutoria">
                            <h3>TUTORÍA Y PSICOPEDAGOGÍA</h3>
                            <p>Orientación académica individual para ayudarte a mejorar tu rendimiento.</p>
                            <p>Contactate:JENNY ALICIA OVIEDO HERRERA -> 978-404-017</p>
                            
                        </div>
                        <div class="card-back">
                            <h3>Consejo:</h3>
                            <p>Asiste a las tutorías cada fin de mes para reforzar tus conocimientos antes de los exámenes.</p>
                        </div>
                    </div>
                </div>
            
                <!-- Tarjeta 3 - Servicio Tópico -->
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="{{ asset('imgs/Servivio-Topico.jpeg') }}" alt="Servicio Tópico">
                            <h3>SERVICIO TÓPICO</h3>
                            <p>Atención médica básica y primeros auxilios dentro del campus.</p>
                        </div>
                        <div class="card-back">
                            <h3>Importante:</h3>
                            <p>En caso de emergencia, acude al tópico ubicado junto al pabellón administrativo.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</main>
@endsection
